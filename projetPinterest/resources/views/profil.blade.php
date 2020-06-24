@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="{{asset(Auth::user()->avatar)}}" class="container" style="width: 200px; height:200px; border-radius: 900px">
            <h2>{{ Auth::user()->name }}'s profil</h2>
            <form enctype="multipart/form-data" action="/profil" method="POST">
                <label>Update your profil picture</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection

