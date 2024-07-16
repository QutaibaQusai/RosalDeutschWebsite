<script>
    function updateSearchResults(searchTerm = '') {
    $.ajax({
        type: "GET",
        url: "search.php",
        data: { search: searchTerm },
        success: function (response) {
            $("#search-results").html(response);
        }
    });
}

$(document).ready(function () {
    updateSearchResults(); // Load all results initially
});
</script>