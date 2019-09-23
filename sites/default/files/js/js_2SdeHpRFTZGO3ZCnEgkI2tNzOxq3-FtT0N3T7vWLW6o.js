/* global a2a*/
(function (Drupal) {
  'use strict';

  Drupal.behaviors.addToAny = {
    attach: function (context, settings) {
      // If not the full document (it's probably AJAX), and window.a2a exists
      if (context !== document && window.a2a) {
        a2a.init_all(); // Init all uninitiated AddToAny instances
      }
    }
  };

})(Drupal);
;
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
});;
jQuery(document).ready(function($) { 
  $("a[href='#form']").click(function(){
     document.getElementById("block-webform").style.display = "block";
  }); 
});;
