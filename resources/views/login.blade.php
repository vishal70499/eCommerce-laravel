@extends('master')
@section('content')
<div class=" custom-login login-body">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <header class="input-header">Login</header>
      <form action="login" method="POST">
        @csrf
        <div class="mb-3 input-field">

          <input type="email" name="email" class="form-control input-box" placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 input-field">
          <input type="password" name="password" class="form-control input-box" placeholder="Password" id="exampleInputPassword1">
        </div>

        <button type="submit" class="buttons">Log In</button>
      </form>
    </div>
  </div>
</div>
@endsection