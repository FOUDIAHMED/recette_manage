<div  class=" m-5">
    <div  class="row my-4">
        @php
            $route = $isUpdate ? route('recettes.update', $recettes->id) : route('recettes.store');
        @endphp
    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($isUpdate)
            @method('PUT')
        @endif
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Titre</span>
            <input name="title" type="text" class="form-control" placeholder="Titre de votre recette" aria-label="Titre de votre recette" aria-describedby="basic-addon1" value="{{ old('title', $recettes->title) }}">
        </div>
        <br>
        <div class="input-group mb-3">
            <input name="image" value="{{old('image')}}" type="file" class="form-control" placeholder="IMG" aria-label="Recipient's username" aria-describedby="basic-addon2">
            @if ($recettes->image)
                <img src="/storage/{{ $recettes->image }}" class="card-img-top" style="width: 100px;" alt="">
            @endif
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea name="description" class="form-control" aria-label="With textarea">{{old('description',$recettes->description)}}</textarea>
        </div>
        <br>
        <div class="d-grit col-2">
            <button class="btn btn-info mt-4 btn-block" type="submit">
                @if ($isUpdate)
                    Update
                @else
                    Create
                @endif
            </button>
            <a class="btn btn-danger mt-4 btn-block" href="/"><i class="fa fa-backward" aria-hidden="true"></i></a>
        </div>
    </form>
    
    </div>
</div>