@extends('layouts.app')

@section('title')
LISTE DES PRODUITS EN VENTE
@stop
@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

<i class="material-icons" data-toggle="tooltip" data-placement="top" title="Ahouter a panier">local_mall</i>



<div class="row">
    <div class="col-2 bg-light">
        <style>
            #link {
                color: #414141;
            }

        </style>

        <a id="link" href="/post">Tout</a> <br><br>
        <a id="link" href="/post/bonpourlemusée">Bon pour le musée</a><br>
        <a id="link" href="/post/vip">Vip </a><br>
        <a id="link" href="/post/ferraille">Ferraille </a>
    </div>

    <div class="col">

        <div class="col">
            <div class="text-centered">
                <div class="container">
                    <br><br>
                    <div class="col">

                        @foreach($posts as $GetPost)

                        <div class="card px-3 mb-3" style="max-width: auto;">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{asset($GetPost->image)}}" class="img-fluid p-2">
                                </div>
                                <div class="media-body pl-5 pt-3 col-md-7">
                                    <h4 class="card-title">{{ $GetPost->title }}</h4>
                                    <p class="card-text">{{ mb_strimwidth($GetPost->description,0,30,'...')}}</p>
                                    <p class="card-text">{{ $GetPost->name}}</p>
                                    <p class="card-text text-right"><small class="text-muted">{{$GetPost->created_at}}</small></p>


                                </div>
                                <div class="pt-4 mt-3 pr-3 col-md-2">
                                    <h4 class="vertical-align:right;"><strong>{{$GetPost->prixFixe}} €</strong></h4>
                                </div>
                            </div>
                            <a href="/post/{{ $GetPost->title }}" class="stretched-link"></a>
                        </div>
                        @endforeach
                    </div>




                </div>

            </div>
        </div>
    </div>
</div>


@endsection
