$(document).ready(function () {
  $("#search").on("keyup", function () {
    let query = $(this).val();
    if (query.length > 0) {
      $.ajax({
        url: "search.php",
        method: "GET",
        data: { search: query },
        success: function (data) {
          $("#results").html(data);
        },
      });
    } else {
      $("#results").html("");
    }
  });
});
