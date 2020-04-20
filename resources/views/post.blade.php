@extends('layouts.app')

@section('title')
LISTE DES PRODUITS EN VENTE
@stop
@section('content')

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>




<div class="row">
    <div class="col-2 bg-light rounded">
        <style>
            #link {
                color: #414141;
            }

        </style>
    
        <br><br><a id="link" href="/post" class="text-monospace  font-weight-bold text-center">  Tout</a> <br><br>
        <a id="link" href="/post/bonpourlemusée" class="text-monospace text-center">Bon pour le musée</a><br><br>
        <a id="link" href="/post/vip" class="text-monospace text-center">Vip </a><br><br>
        <a id="link" href="/post/ferraille" class="text-monospace text-center">Ferraille </a>
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
                                    <p class="card-text text-right"><small class="text-muted">Il reste 6h pour cette enchere</small></p>


                                </div>
                                <div class="pt-4 mt-3 pr-3 col-md-2">
                                   
                                    <h4 class="vertical-align:right;"><strong>{{$GetPost->prixFixe}} {{$GetPost->prixVariable}}
                                    {{$GetPost->prixMax}}€</strong></h4>
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
