@extends('master')
@section('content')
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 mx-auto text-center"> <!-- Add mx-auto and text-center classes -->
      <form  action="login" method="POST" style="max-width: 400px;">
            @csrf
        <h1 class="h3 mb-3 font-weight-normal">Please Sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
  </div>
</div>

@endsection
