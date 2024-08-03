@extends('master')
@section('content')
<div class=" custom-product">


  <div class="col-sm-6">
  <table class="table">
 
  <tbody>
    <tr>
      
      <td>Price</td>
      <td>{{$total}} Rs.</td>
      
    </tr>
    <tr>
      
      <td>Tax</td>
      <td>0 Rs.</td>
    </tr>
    <tr>
      
      <td>Delivery</td>
      <td>100 Rs.</td>
    </tr>
    <tr>
     
      <td>Total Amount</td>
      <td>{{$total+100}}</td>
    </tr>
  </tbody>
</table>

<form method="POST" action="orderplace">
    @csrf
  <div class="form-group">
  
    <textarea type="email" name="address" class="form-control" placeholder="Enter your Address" ></textarea>
    </div>
  <div class="form-group">
   <label for="">Payment Method</label>
   <p> <input type="Radio" value="cash" name="payment" ><span>Online Payment</span>
   <p> <input type="Radio" value="cash" name="payment" ><span>EMI Payment</span>
   <p> <input type="Radio" value="cash" name="payment" ><span> Payment On delivery</span>

    </p>
  </div>
  
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
  </div>
</div><br><br>
@endsection