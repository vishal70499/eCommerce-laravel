@extends('master')
@section('content')
<div class=" custom-login" >
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="register" method="POST">
          <header  class="input-header">Register</header>
  
    @csrf
    <div class="mb-3 input-field">
    <input type="name" name="name" placeholder="User Name" class="form-control input-box"  >
    </div>
    <div class="mb-3 input-field">
    <input type="email" name="email" placeholder="Email address" class="form-control input-box">
    </div>
  <div class="mb-3 input-field">
    <input type="password" name="password" placeholder="Password" class="form-control input-box" >
  </div>
  
  <button type="submit" class="buttons">Register</button>
</form>
        </div>
    </div>
</div>
@endsection