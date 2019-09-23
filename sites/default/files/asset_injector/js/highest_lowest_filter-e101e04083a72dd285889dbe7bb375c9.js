jQuery(document).ready(function($) { 
  $("#edit-sort-by").change(function() {
  var sortOrder = $("#edit-sort-by option:selected").text();
  if(sortOrder=="Price"){
    $("#edit-sort-order option[value='ASC']").text("Lowest");
    $("#edit-sort-order option[value='DESC']").text("Highest");
  } else if (sortOrder=="Reviews") {
    $("#edit-sort-order option[value='ASC']").text("Lowest");
    $("#edit-sort-order option[value='DESC']").text("Highest");
  } 
  else if (sortOrder=="Products"){
    $("#edit-sort-order option[value='DESC']").text("Newest");
    $("#edit-sort-order option[value='ASC']").text("Oldest");
  }
  $("#edit-sort-by").trigger("change");
 });
 $("#edit-sort-by").trigger("change");
});