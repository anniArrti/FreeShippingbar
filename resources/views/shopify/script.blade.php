if(typeof jQuery == 'undefined'){
       document.write('<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>');
 }
console.log("Working");
<!--$('head').append('<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163840430-1"></script>');-->
var id = {{ $shop_id }};
var url = '{{ $url}}';
console.log(id);
console.log(url);