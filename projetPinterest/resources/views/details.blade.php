@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="m-3 ">▪ Nom Picture DB ▪</h1>
    <div class="row">
      <div class="col-md-8">
        <a href="http://placehold.it/750x500"><img class="img-fluid rounded" src="http://placehold.it/750x500" alt=""></a>
      </div>
      <div class="col-md-4 my-auto text-right">
        <h3 class="my-3 font-weight-bold">Description</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ea numquam fugiat sit iusto. Obcaecati mollitia, accusamus eligendi totam illo voluptates facere id error eius deserunt, modi enim, voluptatibus tempora.</p>
        <h3 class="my-3 font-weight-bold">Author</h3>
        <ul class="list-unstyled">
          <li><a href="{{asset(Auth::user()->pseudo)}}">need author replace pseudo J-J Goldman</a></li>
        </ul>
        <h3 class="my-3 font-weight-bold">Wanna Pint'?</h3>
        <ul class="list-unstyled">
          <li><a href="{{asset(Auth::user()->pseudo)}}"><button type="submit" class="btn  text-white btn-info">Shares this</button></a></li>
          
        </ul>
      </div>
    </div>
    <hr>
  </div>

  @endsection