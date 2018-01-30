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
   
      <div class="search mx-auto" style="width: 35%; margin-top:100px;">
        <input type="text" class="form-control" name="SearchItem" id="SearchItem" placeholder="Search..." >
      <!-- results displayed here -->
      <div class="results" id="results" style="margin-top:40px;">
  
        
    </div>
    <!-- all scripts  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="js/main.js"></script>
  <script>
$( function() {
  // $('#results').hide();
  $( "#SearchItem" ).autocomplete({
    source: "{{ route('search') }}"
});
$("a:contains('Specifications')").click(function(event){
    event.preventDefault();//to stop refresh/redirecting
    $("#results").load("specifications.blade.php");
});
  $("#SearchItem").keypress(function(e) {
   
    if(e.keyCode == 13){
      $('#results').show();
      $value=$('#SearchItem').val();
      $.ajax({
        type : 'get',
        url :"{{ route('phone') }}",
        data: {'SearchItem':$value},
        success:function(data){
          $('#results').html(data);
        }
    });}
  })
});
  </script>
  </body>
</html>