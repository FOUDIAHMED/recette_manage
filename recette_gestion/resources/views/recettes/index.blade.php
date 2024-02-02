@extends('base')
@section('title', 'recette')
@section('content')
<div class="alert alert-secondary"> <h1 class="text-center display-4"> <i class="fa fa-list-alt" aria-hidden="true"></i> Recettes</h1></div>
   
    <a href="recettes/create" class="btn btn-primary">ADD&nbsp;<i class="fa fa-plus-square" aria-hidden="true"></i></a>
    <br>
    <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">titel</th>
                <th scope="col">description</th>
                <th scope="col">date de creation</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recettes as $recette)
                <tr>
                    <td>{{ $recette->id }}</td>
                    <td>{{ $recette->title }}</td>
                    <td>{{ Str::limit($recette->description, 20) }}</td>
                    <td>{{ $recette->created_at }}</td>
                    <td>
                        <img width="100px" src="storage/{{ $recette->image }}" alt="hhhhhh">
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{route('recettes.edit', $recette)}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                        <br>
                        <br>
                        <form method="POST" action="{{ route('recettes.destroy', $recette) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $recettes->links() }}
    <a class="btn btn-danger mt-4 btn-block" href="/"><i class="fa fa-backward" aria-hidden="true"></i></a>
    <br><br><br><br><br><br>
@endsection
