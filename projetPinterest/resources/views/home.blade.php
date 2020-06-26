@extends('layouts.app')

<link rel="stylesheet" href="{{asset('/css/home.css')}}">

@section('title', 'profil')

@section('content')
<div class="masonry-wrapper">

    <!-- Insérer une boucle -->

    <div class="masonry">
        @foreach ($articles as $article)
            <div class="masonry-item">
                {{-- <?php dd($article->image)?> --}}
                <a href="/details/{{$article->id}}">
                    <img src={{$article->image}} alt="Dummy Image" class="masonry-content">
                </a>
            </div>
        @endforeach
    </div>    
</div>
</body>

</html>
@endsection
