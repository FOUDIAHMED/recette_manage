@extends('base')
@section('title', ($isUpdate?'Update' : 'Create') . 'Recetes')
@section('content')
<h1 class="text-center dispaly-6">
    <b>
        <i>
            {{($isUpdate?'Update' : 'Create') ." ". 'Recetes'}}
        </i>
    </b>
</h1>
<br>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Error</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @include('recettes.form')
@endsection
