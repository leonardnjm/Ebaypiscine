@extends('layouts.app')


@foreach($post as $GetPost)
@section('title')

{{$GetPost->title}}

@stop

@section('content')


<div class="row ">
    <div class="col-12 my-3 flex-center">
        <img src="{{asset($GetPost->image)}}" style="height:300px;width:300px; margin-right:15px">
        <br><br>
    </div>

    <div class="rounded border border-sercondary my-4 col">
        <div class="col-12 mt-3">
            <h3> Description de l'objet </h3>
        </div>
        <div class="col-12">
            {{$GetPost->description}}
            <br><br>
        </div>

        <div class="col-12 my-3 flex-center">
            <h5> Prix de l'objet: {{$GetPost->prixFixe}} € </h5>
        </div>
    </div>
    <br>
</div>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Enchérir</a>

        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Acheter imédiatement</a>

        <a class="nav-item nav-link disabled" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Négocier prix</a>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="flex-center mt-5">
            <h3>Dernière enchère : {{ $GetPost->prixVariable }}</h3>
        </div>
        <div class="flex-center mt-3">
            <form action="{{url('post/')}}/{{ $GetPost->title }}" method="POST" class="form-inline">
                @csrf
                <div class="form-group mx-sm-2 mb-2 ">
                    <label for="prixVariable" class="sr-only">prix Variable</label>
                    <input type="number" class="form-control" name="prixVariable" placeholder="Nouveau prix d'enchère" required>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Confirmer</button>

            </form>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-contact-tab">
        <form action="{{url('post/ajout')}}/{{ $GetPost->title }}">
            <div class="flex-center mt-5">
                <button type="submit" class="btn btn-primary mb-2">Ajouter au panier</button>
            </div>
        </form>
    </div>

    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <form action="{{url('post/neo')}}/{{ $GetPost->title }}">
            @csrf
            <div class="form-group mx-sm-2 mb-2 ">
                <label for="prixNego" class="sr-only">Négocier</label>
                <input type="number" class="form-control" name="prixNego" placeholder="Nouveau prix d'enchère" required>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirmer</button>
        </form>
    </div>
</div>
@endforeach


<br><br>



@endsection
