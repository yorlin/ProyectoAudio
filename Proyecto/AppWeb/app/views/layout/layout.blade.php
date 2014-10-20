<!DOCTYPE html>
<html>
  <head>
    <title>Music Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{HTML::style('bootstrap/css/bootstrap.min.css');}}
   
  </head>
  <body>
      <div class="container">
          {{ $content }}
      </div>
    <script src="//code.jquery.com/jquery.js"></script>
    {{HTML::script('js/jquery.js');}}
    {{HTML::script('bootstrap/js/bootstrap.min.js');}}
    {{HTML::script('js/funciones.js');}}
   
  </body>
</html>