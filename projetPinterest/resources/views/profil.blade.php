@extends('layouts.default')

@section('title', 'profil')

@section('content')

<!-- Section à modifier en fonction des pages etc -->
<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand " href="#">P-Interest</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto ml-5 ">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Profil</a>
                </li>
            </ul>

        </div>
    </nav>
</header>

<body>

    <!-- Display d'image à automatiser  -->
    <div class="container container-fluid mx-auto">
        <div class="jumbotron bg-secondary">
            <div class="firstline pt-3 pb-2 row row-responsive-sm">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-4 " alt="fleur">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-4" alt="fleur2">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-4" alt="fleur3">
            </div>
            <div class=" secondline row pt-4 row-responsive-sm">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-3" alt="fleur">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-3" alt="fleur2">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-3" alt="fleur3">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-3" alt="fleur4">
            </div>
            <div class=" thirdline row pt-4 row-responsive-sm">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-2" alt="fleur">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-2" alt="fleur2">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-2" alt="fleur3">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-2" alt="fleur4">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-2" alt="fleur5">
                <img src="https://i.pinimg.com/564x/72/70/d0/7270d0f262f68ebb6d1ea8804e750148.jpg" class="rounded w-25 col-sm-2" alt="fleur6">
            </div>
        </div>
    </div>
</body>
@endsection
