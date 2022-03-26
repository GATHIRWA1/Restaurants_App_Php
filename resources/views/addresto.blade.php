@extends('layout')

@section('pagecontent')


<form  action="" method="post" style="width: 40%">
    @csrf

  <div class="mb-4">
    <label  class="form-label">NAME</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="mb-4">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" name="Address">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>













@stop
