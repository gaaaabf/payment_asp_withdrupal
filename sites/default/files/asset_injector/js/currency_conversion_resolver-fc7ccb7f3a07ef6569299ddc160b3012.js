console.log('Starting');
var max = document.querySelectorAll('#edit-currency input[type="checkbox"]').length;
for(i = 0; i != max; i++){
  var valueof = document.querySelectorAll('#edit-currency input[type="checkbox"]')[i].getAttribute('data-drupal-selector');

  checks(document.querySelectorAll('#edit-currency input[type="checkbox"]')[i]);
  
  document.querySelectorAll('#edit-currency input[type="checkbox"]')[i].addEventListener("change", function(){ 
    var target = this.getAttribute('data-drupal-selector');
    var newtarget = target.replace('sync-1', 'value');
    console.log(newtarget);
    toggle(newtarget, this);
  });
}

function toggle(newtarget, checkbox) {
  var res = checkbox.checked;
  if(res === true) {
    document.getElementById('newtarget').removeAttribute("disabled");  
  } else {
    document.getElementById('newtarget').setAttribute("disabled","disabled");  
  }
  
}

function checks(html){
  var checking = html.checked;
  var target = html.getAttribute('data-drupal-selector');
  var newtarget = target.replace('sync-1', 'value');
  console.log(newtarget);
  if(checking === true) {
    document.getElementById('newtarget').setAttribute("disabled","disabled");
  } else {
    document.getElementById('newtarget').removeAttribute("disabled");
  }
}