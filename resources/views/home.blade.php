
<style>
 .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }

  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    background: transparent !important;
    color: #0597F2;
  }

  .carousel-control.right:hover , .carousel-control.left:hover {
    color: #056CF2;
  }

  .carousel-indicators li {
    border: 1px solid #0597F2 !important;
  }
  .carousel-indicators li.active {
    background-color: #0597F2;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }

</style>

@extends('index')
@section('mainBody')
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-6 text-center">
      <h2>About</h2><br>
      <h5>RSCleaningServices is a family owned business.</h5>
      <p>We are all about green cleaning, and offering the reliable services to our fellows,
        Nova Scotains. RSCleaningServices has team of professionals who knows what they are doing, 
        Our highly trained proffesionals have many years of cleaning experince on the field and will 
        deliever high quality results. 
      </p>
    </div>
  <!-- carousel -->

    <div id="myCarousel" class="carousel slide text-center col-sm-6 mx-auto" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" ></li>
        <li data-target="#myCarousel" data-slide-to="2" ></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <div class="item active">
            <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
        </div>
        <div class="item">
            <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
        </div>
        <div class="item">
            <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
   </div>
</div>

@endsection