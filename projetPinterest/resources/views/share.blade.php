@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12 m-2">
            <h1 class="text-center">Wanna share somethings?</h1>
        </div>
    </div>

    <div class="row text-center m-3">
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="http://placehold.it/750x500" alt="waiting">
        </div>

        <div class="col-lg-6">
            <form action='/share' method='post'>
            @csrf
                <div class="input-group input-group-lg mb-5">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
                    </div>
                    <input type="text" class="form-control" name='title' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <textarea class="form-control" id="exampleFormControlTextarea4" name='content' rows="10" placeholder="put content"></textarea>
                <input class="custom-control-file m-2 border border-dark btn btn-secondary btn-lg" name='image' type="file" id="file" class="custom-file-input">
                <input class="btn  text-white btn-danger mr-2" type='submit' name='save' value='upload'>
            </form>
        </div>
        
    </div>
</div>



@endsection
