jQuery(function ($) {

	$('select[name="shipping_information[shipping_profile][select_address]"]').change(function(){
	  alert('YOU HAVE CHANGED');
  	$('input[value="Recalculate shipping"]')[0].click();
	});
	
});