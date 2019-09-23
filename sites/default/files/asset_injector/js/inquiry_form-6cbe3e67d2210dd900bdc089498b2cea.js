jQuery(document).ready(function($) { 
  $("a[href='#form']").click(function(){
     $(".webform-ajax-form-wrapper").css( "display", "block" );
     $(".field--name-field-reviews").css( "display", "none" );
  }); 
  $("a[href='#review']").click(function(){
     $(".field--name-field-reviews").css( "display", "block" );
     $(".webform-ajax-form-wrapper").css( "display", "none" );
  }); 
});