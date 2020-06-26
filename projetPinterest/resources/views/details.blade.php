@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="m-3">▪{{$article->title}} ▪</h1>
    <div class="row">
      <div class="col-md-8">
        <img class="img-fluid rounded" src= {{$article->image}} alt="">
      </div>
      <div class="col-md-4 my-auto text-right">
        <h3 class="my-3 font-weight-bold">Description</h3>
        <p> {{$article->content}} </p>
        <h3 class="my-3">Author</h3>
        <ul class="list-unstyled">
          <li><a href="#">{{$article->author}}</a></li>
        </ul>
        <h3 class="my-3 font-weight-bold">Wanna Pin' or Like?</h3>
        <ul class="list-unstyled">
          <li><a href="#"><button type="submit" class="btn  text-white btn-info mr-2">Pinned this</button><button type="submit" class="btn  text-white btn-primary">Like it</button></a></li>
          
        </ul>
      </div>
    </div>
    <hr>
  </div>

  @endsection