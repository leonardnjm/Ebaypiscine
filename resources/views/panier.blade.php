@extends('layouts.app')
@section('title')
votre Panier
@stop
@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
<div class="row">

    <div class="col">

        <div class="col">
            <div class="text-centered">
                <div class="container">
                    <br><br>
                    <div class="col">

                        @foreach($posts as $GetPost)

                        <div class="card px-3 mb-3" style="max-width: auto;">
                            <div class="row">
                                <img src="{{asset($GetPost->image)}}" style="height:100px;width:100px; margin-right:15px" class="img-fluid p-2">
                                <div class="media-body pl-5 pt-3 col">
                                    <h4 class="card-title">{{ $GetPost->title }}</h4>
                                    <p class="card-text">{{ mb_strimwidth($GetPost->description,0,30,'...')}}</p>
                                    <p class="card-text">{{ $GetPost->name}}</p>
                                    <p class="card-text text-right"><small class="text-muted">{{$GetPost->created_at}}</small></p>


                                </div>
                                <div class="pt-4 mt-3 pr-3">
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
    <form class="col-12 flex-center" action="{{url('panier/payement')}}">
            <div class="flex-center mt-5">
                <button type="submit" class="btn btn-primary mb-2">Payer</button>
            </div>
        </form>
</div>


@endsection
