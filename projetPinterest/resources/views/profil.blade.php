@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <h2 class="font-weight-bold"> {{ Auth::user()->pseudo }}'s profil page  !</h2>

            <img src="{{asset(Auth::user()->avatar)}}" class="img-fluid border border-dark rounded mt-4 mb-3">
            <form enctype="multipart/form-data" class="mt-1 mb-2" action="/profil" method="POST" >
                <input value="Choose Files" type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input value="Upload Files" type="submit" class="btn btn-sm btn-secondary mt-2 mb-2">
            </form>
            <div class="card mt-3 mb-2">
                <div class="card-header font-weight-bold">Your informations</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Firstname - {{ Auth::user()->firstname }}</li>
                        <li class="list-group-item">Lastname - {{ Auth::user()->lastname }}</li>
                        <li class="list-group-item">Pseudo - {{ Auth::user()->pseudo }}</li>
                        <li class="list-group-item">Email - {{ Auth::user()->email }}</li>
                        <li class="list-group-item">Pass - Reset your password on <input type="submit" value="Reset " class="btn btn-sm btn-danger ml-4"> </li>
                      </ul>
                </div>
            </div>
                
            <div class="card mt-3 mb-2">
                <div class="card-header font-weight-bold">Shares</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div> 
                    @endif

                    Pictures that you shared ; need pictures previously shared
                </div>
            </div>
            <div class="card mt-3 mb-2">
                <div class="card-header font-weight-bold">Subscribers</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div> 
                    @endif

                    Number of Subscribers ; need number maybe in real time?
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
