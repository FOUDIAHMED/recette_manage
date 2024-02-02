@extends('base')
@section('title', 'home')
@section('title', 'home')
@section('content')
    <div class="container">
        <h1  class="text-center display-4">Toutes les recettes</h1>
            <br>
            <br>
        
        <br>
        <br>
        <div class="row">
            @foreach($recettes as $recette)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img width="100px" height="300px" src="storage/{{ $recette->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5></h5>
                            <h5 class="card-title">Title :{{ $recette->title }}</h5>
                            <p class="card-text">description : {{ Str::limit($recette->description ,20) }}</p>
                            <h6 class="card-text">date de creation : {{ $recette->created_at }}</h6>
                            <p class="card-text">Created by: {{ $recette->user_id }}</p> 
                            <a href="{{ route('AfficherDetail', $recette->id) }}" style="float:right" class="btn btn-info ">Show more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $recettes->links() }}
@endsection
