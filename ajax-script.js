$(document).on("click", "#showData", function (e) {
  $.ajax({
    type: "GET",
    url: "backend-script.php",
    dataType: "html",
    success: function (data) {
      $("#table-container").html(data);
    },
  });
});

$(document).on("click", "#excel", function (e) {
  $("#hidden-type").val("export-to-excel");
  $("#export-form").submit();
  $("#hidden-type").val("");
});
