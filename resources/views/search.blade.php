<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <!-- Search Bar -->
      <form action="/phone" method="get" id="aa">
      <div class="search mx-auto" style="width: 35%; margin-top:100px;">
        <input type="text" class="form-control" name="SearchItem" id="SearchItem" placeholder="Search..." >
        </form>
      <!-- results displayed here -->
      <div class="results" id="results" style="margin-top:40px;">
          @yield('content')
        
      </div>
    <!-- all scripts  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="js/main.js"></script>
  <script>
$( function abc() {
  //$('#results').hide();
  $( "#SearchItem" ).autocomplete({
    source: "{{ route('search') }}",
    select: function(event ,ui){
      $("#aa").submit();
    }
});



});
  </script>
  </body>
</html>