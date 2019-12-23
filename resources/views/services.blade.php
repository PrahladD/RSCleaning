<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.col-sm-4 {
  text-align: center;
  margin: 10px, 10px, 10px, 10px;
}
.btn {
  width: 250px;
  height: 80px;
  color: #004080 !important;
  font-size: 1.3em !important;
  font-weight: bold !important;
  display: flex;
  cursor: default !important;
}
.btn:focus {outline:0 !important;}
.btn:after {
  border: none !important; ;
  outline: none !important; ;
}
</style>

@extends('index')

@section('mainBody')

<!-- Container (Services Section) -->
<div id="services" class="container bg-grey"><br>
  <div class="row justify-content-between"><br>
    <div class="col-sm-4">
      <button type="button" class="btn" disabled>MOVE IN / MOVE OUT</button>
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn btn-disabled" disabled>DEEP CLEANING</button>
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn" disabled>RESIDENTIAL</button>
    </div>
  </div> <br>
  <div class="row justify-content-between">
    <div class="col-sm-4">
      <button type="button" class="btn" disabled>CARPETS</button>
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn" disabled>COMMERCIAL</button>
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn" disabled>WAXING / STRIPPING </button>
    </div>
  </div>
</div>

@endsection        