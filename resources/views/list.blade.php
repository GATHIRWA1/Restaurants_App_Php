
@extends('layout')

@section('pagecontent')

<div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->Address}}</td>
    </tr>
     @endforeach

</div>





@stop



