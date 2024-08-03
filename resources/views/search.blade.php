@extends('master')
@section('content')
<div class=" custom-product" >

  <div class="col-sm-4">
    <a href="#">Filter</a>
  </div>
  <div class="col-sm-4">
  <div class="trendin-wrapper">
    <h2>Result for Products</h2>
    <div class="" >
   @foreach($products as $item)
   <div class="searched-item">
    <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="{{$item['gallery']}}" >
      <div class="">
        <h2 >{{$item['name']}}</h2>
        <h5 >{{$item['Description']}}</h5>
        
      </div>
    </div>
@endforeach
  </div>
   </div> 
  </div>
</div><br><br>
@endsection