@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12 m-2">
            <h1 class="text-center">Wanna share somethings?</h1>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-lg-6 input-group">
            <img class="img-fluid rounded" src="http://placehold.it/750x500" alt="waiting">
                <input class="input-group input-group-lg custom-control-file mt-2" type="file" id="file" >
        </div>
        

        <div class="col-lg-6 ">
            <div class="input-group input-group-lg mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <textarea class="form-control" id="exampleFormControlTextarea4" rows="14" placeholder="Description"></textarea>
            <button type="submit" class="btn btn-lg btn-danger border border-dark m-2 float-right">Share it !</button>
        </div>
        
    </div>
</div>



@endsection
