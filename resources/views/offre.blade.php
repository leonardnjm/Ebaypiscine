@extends('layouts.app')


@foreach($posts as $GetPost)
@section('title')

{{$GetPost->title}}

@stop
@endforeach
@section('content')

<div>

    <div class="row ">
   @foreach($posts as $GetPost)
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
            </div>
        </div>
        <br>
    </div>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Négocier prix</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="flex-center mt-5">
                 <h3>Dernière enchère : {{ $GetPost->prixNego }}</h3>
               
            <form action="{{url('post/offres/')}}/{{ $GetPost->title }}/{{ $GetPost->nbNego }}" method="post">
                @csrf
                <div class="form-group mx-sm-2 mb-2 ">
                    <label for="prixNego" class="sr-only">Négocier</label>
                    <input type="number" class="form-control" name="prixNego" placeholder="Votre Offre" required>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Proposer un autre une offre</button>

            </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
