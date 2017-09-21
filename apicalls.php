<html>

<head>
  <title>PNotify Testing</title>
 
 
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
</head>

<body>
  <h2>This is Foo - the home of a sticky note.</h2>
  <h1 id="test"></h1>
  
  <button onclick="clickButton()">Click me!</button>

<p id="resultForm"></p>

  
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<script id="data" type="application/json

$.ajax({
url: "http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1",
cache: false,
dataType: "json",
success: function(quote){
      $("#test").html(quote[0].content);
}
});
</script>

 



</body>
</html>
