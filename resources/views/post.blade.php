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
                        <div class="col">
                            @foreach($posts as $GetPost)

                            <div class="card mb-3" style="max-width: auto;">
                                <div class="row no-gutters">

                                    <div class="media position-relative">
                                        <img src="..." class="mr-3" alt="...">
                                        <div class="media-body">
                                            <h5 class="card-title">{{ $GetPost->title }}</h5>
                                            <p class="card-text">{{ mb_strimwidth($GetPost->description,0,30,'...')}}</p>
                                            <p class="card-text">{{ $GetPost->name}}</p>
                                            <p class="card-text text-right"><small class="text-muted">{{$GetPost->created_at}}</small></p>


                                        </div>
                                    </div>
                                    <a href="/post/{{ $GetPost->title }}" class="stretched-link"></a>
                                </div>
                            </div>


                            @endforeach


                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
    @endsection