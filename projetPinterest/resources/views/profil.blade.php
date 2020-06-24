@extends('layouts.app')

@section('content')
{{-- <div class="container-fluid">
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
</div> --}} 
<div class="container"> <!-- container fluid?-->
    <div class="row my-2 ">
        <div class="col-lg-8 order-lg-2 ">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Shares</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                </li>
            </ul>
            <div class="tab-content py-4 rounded">
                <div class="tab-pane active " id="profile">
                    <div class="row mt-5 ">
                        <div class="col-md-6 ">
                            <h4 class="font-weight-bold">About</h4>
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                            <ul class="list-unstyled">
                                <li>Firstname ▪ {{ Auth::user()->firstname }}</li>
                                <li>Lastname ▪ {{ Auth::user()->lastname }}</li>
                                <li>Pseudo ▪ {{ Auth::user()->pseudo }}</li>
                                <li>Email ▪ {{ Auth::user()->email }}</li>
                            </ul>
                            <h4 class="font-weight-bold">Password</h4>
                            <p> Click here to reset your password - <input type="submit" value="Reset " class="btn btn-sm btn-dark ml-1"></p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="font-weight-bold">Statistics</h4>
                                <h5>Posts shared ─ <span class="badge badge-info">nbr posts partagés</span></h5>
                                <h5>Likes ─ <span class="badge badge-info">nbr like</span></h5>
                                <h5>Created ─ <span class="badge badge-info">nbr_posts_cree</span></h5>
                                <hr>
                                <h4>Followers ─ <span class="badge badge-danger"><i class="fa fa-user"></i>nbr Followers</span></h4>
                                <h4>Views ─ <span class="badge badge-danger"><i class="fa fa-eye"></i>nbr_de_vues_surpostpartagé</span></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="font-weight-bold mt-5">Recently shared</h4>
                            <img src="{{asset(Auth::user()->avatar)}}" style="width: 9rem; height:9rem" class="m-2" alt="posts">
                            <img src="{{asset(Auth::user()->avatar)}}" style="width: 9rem; height:9rem" class="m-2" alt="posts">
                            <img src="{{asset(Auth::user()->avatar)}}" style="width: 9rem; height:9rem" class="m-2" alt="posts">
                            <img src="{{asset(Auth::user()->avatar)}}" style="width: 9rem; height:9rem" class="m-2" alt="posts">
                            
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="container-fluid tab-pane p-2 " id="messages">
                    <table class="table table-hover table-striped  ">
                        <tbody>                                    
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                   <span class="float-right font-weight-bold ">3 hrs ago</span>Posts shared <a href="{{asset(Auth::user()->avatar)}}"> lien posts partagés</a>
                                </td>
                            </tr>
                            <tr class="border border-secondary rounded">
                                <td>
                                    <img src="{{asset(Auth::user()->avatar)}}" class="max-content"  alt="posts">
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                    <span class="float-right font-weight-bold">6 hrs ago</span>Posts shared <a href="{{asset(Auth::user()->avatar)}}"> lien posts partagés</a>
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td>
                                    <img src="{{asset(Auth::user()->avatar)}}"  alt="posts">
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                    <span class="float-right font-weight-bold">3 hrs ago</span>Posts shared <a href="{{asset(Auth::user()->avatar)}}"> lien posts partagés</a>
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td >
                                    <img src="{{asset(Auth::user()->avatar)}}"  alt="posts">
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                    <span class="float-right font-weight-bold">3 hrs ago</span>Posts shared <a href="{{asset(Auth::user()->avatar)}}"> lien posts partagés</a>
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td>
                                    <img src="{{asset(Auth::user()->avatar)}}"  alt="posts">
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                    <span class="float-right font-weight-bold">3 hrs ago</span>Posts shared <a href="{{asset(Auth::user()->avatar)}}"> lien posts partagés</a> 
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                    <img class="img-fluid" src="{{asset(Auth::user()->avatar)}}"  alt="posts">
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                    <span class="float-right font-weight-bold">3 hrs ago</span>Posts shared <a href="{{asset(Auth::user()->avatar)}}"> lien posts partagés</a>
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td>
                                    <img class="img-fluid" src="{{asset(Auth::user()->avatar)}}"  alt="posts">
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                    <span class="float-right font-weight-bold">3 hrs ago</span>Posts shared <a href="{{asset(Auth::user()->avatar)}}"> lien posts partagés</a>
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td>
                                    <img class="img-fluid" src="{{asset(Auth::user()->avatar)}}"  alt="posts">
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td class="border border-secondary">
                                    <span class="float-right font-weight-bold">3 hrs ago</span>Posts shared <a href="{{asset(Auth::user()->avatar)}}"> lien posts partagés</a>
                                </td>
                            </tr>
                            <tr class="border border-secondary">
                                <td>
                                    <img class="img-fluid" src="{{asset(Auth::user()->avatar)}}"  alt="posts">
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <h3 class="mb-3 mt-2 font-weight-bold">{{ Auth::user()->pseudo }}'s profile</h3>
            <img src="{{asset(Auth::user()->avatar)}}" alt="avatar" class="mx-auto img-fluid d-block border border-dark rounded mt-3 mb-1">
            <label class="custom-file">
                <span class="custom-file-control border border-dark badge badge-pill badge-secondary">Choose different file</span>
                <input type="file" id="file" class="custom-file-input">
            </label>
        </div>
    </div>
</div>

@endsection
