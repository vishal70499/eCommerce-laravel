@extends('master')
@section('content')
<div class=" custom-product">


  <div class="col-sm-10">
    <div class="trendin-wrapper">
      <h2>Orders List</h2>
         <div class="">
        @foreach($orders as $item)
        <div class=" row searched-item cart-list-devider">
          <div class="col-sm-3">
           
              <img class="trending-img" src="{{$item->gallery}}">

           

          </div>
          <div class="col-sm-3">
           

              <div class="">
                <h2>{{$item->name}}</h2>
                <h5>Delivery status: {{$item->status}}</h5>
                <h5>Payment status: {{$item->payment_status}}</h5>
                <h5>Payment Method: {{$item->payment_method}}</h5>
                <h5>Delivery Address: {{$item->address}}</h5>
                <h5>Price : {{$item->price}} Rs.</h5>

              </div>
            

          </div>
          <div class="col-sm-3">

                 </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>
</div><br><br>
@endsection