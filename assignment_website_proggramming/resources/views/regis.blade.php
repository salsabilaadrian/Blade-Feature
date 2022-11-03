@extends('project')

<style>
  .container1{
    margin: 20;
    padding: 91;
  }
</style>

@section('content')
<div class="container1">
  <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
  </form>
  <div class="container2">
  <br>
   <a href="login" style="color: black;"><u><i>Do you have an Account?</i></u></a>
</div>
</div>

@endsection