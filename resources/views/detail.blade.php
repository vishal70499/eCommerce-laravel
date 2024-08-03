@extends('master')
@section('content')
<div class=" custom-product" >

<div class="container">
    <div class="row">
<div class="col-sm-6">
<img class="detail-img" src="{{$product['gallery']}}" alt="">
</div>
<div class="col-sm-6">
    <a href="/">Go back</a>
    <h2>Name: {{$product['name']}}</h2>
<h3>Price: {{$product['price']}}</h3>
<h4>Category : {{$product['category']}}</h4>
<h5>Description : {{$product['Description']}}</h5>
<br>
<form action="/add_to_cart" method="POST">
    <input type="hidden" name="product_id" value="{{$product['id']}}">
    @csrf
<button class="btn btn-success buttons">Add to Cart</button>
</form>
<button class="btn btn-primary buttons">Buy Now</button>

</div>

    </div>
</div>
</div>
@endsection