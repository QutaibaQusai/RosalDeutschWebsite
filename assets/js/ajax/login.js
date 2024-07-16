$(document).ready(function () {
    $("#admin-login-form").on("submit", function (event) {
        event.preventDefault();

        var user_name = $("input[name='user_name']").val();
        var password = $("input[name='password']").val();

        if (user_name === "" || password === "") {
            $("#message").text("Please fill in all fields.");
            return;
        }

        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "checkLogin.php", // Adjust the URL if needed
            data: formData,
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    window.location.href = response.location;
                } else {
                    $("#message").text(response.message);
                }
            },
            error: function () {
                $("#message").text("An error occurred during login.");
            }
        });
    });
});