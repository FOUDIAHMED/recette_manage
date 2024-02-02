@extends('base')
@section('title', 'detail')
@section('content')
<div class="container mt-4">
    @if ($recettes)
        <div class="card">
            <div class="text-center">
                <img width="100px" height="300px"  src="{{ asset('storage/' . $recettes->image) }}" class="card-img-top" alt="Recettes Image">
            </div>
            <div class="card-body">
                <h3 class="card-title">{{ $recettes->title }}</h3>
                <p class="card-text">{{ $recettes->description }}</p>
                <p class="card-text"><small class="text-muted">Created on: {{ $recettes->created_at }}</small></p>
                <p class="card-text"><small class="text-muted">Author: {{ $recettes->user_id }}</small></p>
            </div>
        </div>
    @else
        <div class="alert alert-danger mt-4" role="alert">
            <h3>This recette doesn't exist</h3>
            <a href="create" class="btn btn-warning">Add Recette <i class="fa fa-plus-square" aria-hidden="true"></i></a>
        </div>
    @endif
    <a class="btn btn-danger mt-4" href="/"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
</div>
@endsection
