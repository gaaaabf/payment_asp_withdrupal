jQuery(document).ready(function($) { 
  var uurl = window.location.href;
  var langs = ["lang=ja", "lang=en", "lang=zh-hans"];
  // first split
  uurl = uurl.split('/');
  uurl = uurl.splice(3);
  uurl = uurl.join('/');
  // second split
  uurl = uurl.split('?');
  for (i = 0; i < 2; i++) {
    var index = uurl.indexOf(langs[i]);
    
      if(index > 0) {
        uurl[index] = ' ';
        uurl = uurl.join('/');
        window.history.replaceState({}, document.title, "/" + uurl);
      }
  }

  
});