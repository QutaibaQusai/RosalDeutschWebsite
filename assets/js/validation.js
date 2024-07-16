$(document).ready(function () {
    const validationRules = {
      'reg-req': {
        rule: value => value.trim() !== '',
        message: 'This field is required.',
      },
      'reg-email': {
        rule: value => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value),
        message: 'Please enter a valid email address.',
      },
      'reg-name': {
        rule: value => /^[a-zA-Z\s]+$/.test(value),
        message: 'Please enter a valid name.',
      },
      'reg-sel': {
        rule: value => value !== '-1',
        message: 'Please make a selection.',
      },
      'reg-phone': {
        rule: value => /^\d{10}$/.test(value),
        message: 'Please enter a valid 10-digit phone number.',
      },
      'reg-number': {
        rule: value => /^\d+$/.test(value),
        message: 'Please enter a valid number.',
      },
    };
  
    function updateErrorMessage(input, message, isValid) {
      const errorSpan = input.next('.error-message');
      errorSpan.toggle(Boolean(message)).html(message).css('color', isValid ? 'green' : 'red');
    }
  
    function validateInput(input) {
      const classes = input.attr('class').split(/\s+/);
      const errorSpan = input.next('.error-message');
      let isValid = true;
      let checkForDuplicate = false;
  
      classes.forEach(className => {
        const rule = validationRules[className];
        if (rule && !rule.rule(input.val())) {
          isValid = false;
          updateErrorMessage(input, rule.message, false);
        }
  
        if (className === 'reg-dup') {
          checkForDuplicate = true;
        }
      });
  
      input.toggleClass('error', !isValid);
  
      if (!isValid) {
        if (!errorSpan.length) {
          input.after('<div class="error-message"></div>');
        }
      } else {
        if (checkForDuplicate) {
          checkDuplicate(input);
        } else {
          updateErrorMessage(input, 'Input is valid.', true);
        }
      }
  
      return { isValid };
    }
  
    function checkDuplicate(input, form) {
      const value = input.val();
      const fieldName = input.attr('name');
      const tableName = input.data('table'); // Get the table name from data attribute
      const excludeId = input.data('exclude-id'); // Get the exclude ID from data attribute
  
      $.post('../../assets/db/check_duplicate.php', { table: tableName, field: fieldName, value, exclude_id: excludeId }, function (data) {
        const isDuplicate = data === 'true';
  
        if (isDuplicate) {
          updateErrorMessage(input, 'This value is a duplicate.', false);
          input.data('hasDuplicate', true); // Set the flag for duplicates
        } else {
          updateErrorMessage(input, 'Input is valid.', true);
          input.data('hasDuplicate', false); // Reset the flag for duplicates
        }
      });
    }
  
    $('.valid-form').on('submit', function (event) {
      event.preventDefault();
      const form = $(this);
      const inputs = form.find('[class^="reg-"]');
      let allValid = true;
      let hasDuplicate = false; // Initialize the flag for duplicates
  
      inputs.each(function () {
        const input = $(this);
        const result = validateInput(input);
        if (!result.isValid) {
          allValid = false;
        }
  
        // Check if any input has a duplicate value
        if (input.data('hasDuplicate')) {
          hasDuplicate = true;
        }
      });
  
      if (allValid && !hasDuplicate) {
        form[0].submit();
      }
    });
  
    $('[class^="reg-"]').on('blur', function () {
      validateInput($(this));
    });
  
    $('[class^="reg-"]').each(function () {
      if (!$(this).next('.error-message').length) {
        $(this).after('<div class="error-message"></div>');
      }
    });
  });