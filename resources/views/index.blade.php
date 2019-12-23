<!Doctype html>
<html lang="en">
<head>
    <title>RSCleaningServices</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    html { overflow-y: scroll; }
    body { 
        background-color: #f6f6f6;
        color:  #004080;
    }
    .jumbotron {
        background-color: #fff;
        color: #0066ff;
        padding: 80px 25px;
        font-family: 'Anton Regular', Montserrat, sans-serif;
    }
</style>
<body>
    <div class="jumbotron text-center">
    @if(Request::is('home'))
        <h1>Keep it Sparkling !</h1>
        <p>You are one call away from keeping it clean and sparkling.</p>
    @elseif (Request::is('services'))
        <h1>Our Services</h1>
        <p> Below are the list of services we offer</p>
    @endif
    </div>
@include('nav')

<div>
    @yield('mainBody')
</div>

@include('footer')

<!-- Bootstrap core JavaScript

================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>

<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
<script src="../../../../assets/js/vendor/holder.min.js"></script>

</body>
</html>