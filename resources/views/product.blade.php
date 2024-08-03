@extends('master')
@section('content')
<div class=" custom-product" >
   
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   @foreach($products as $item)
   <div class="img-area item {{$item['id']==2?'active':''}}">
     <a href="detail/{{$item['id']}}">
     <img class="slider-img" src="{{$item['gallery']}}">
      <div class="carousel-caption slider-text">
        <h3 >"{{$item['name']}}"</h3>
        <p>"{{$item['Description']}}"</p>
      </div>
     </a>
    </div>
@endforeach
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
   <div class="trending-wrapper">
    <h1>Trending Products</h1>
    <div class="" >
   @foreach($products as $item)
   <a href="detail/{{$item['id']}}">
   <div class="img-area trending-item">
      <img class="trending-img" src="{{$item['gallery']}}" >
      
        <h3 >{{$item['name']}}</h3>
        
      
    </div>
@endforeach
  </div>
   </div> 
</div><br><br>
@endsection