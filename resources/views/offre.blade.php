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
    
    <div class="flex-center mt-5">
            <h3>Dernière proposition : {{ $GetPost->prixNego }}</h3>
        </div>
        <div class="flex-center mt-3">
            <form action="{{url('post/nego')}}/{{ $GetPost->title }}" method="POST" class="form-inline">
                @csrf
                <div class="form-group mx-sm-2 mb-2 ">
                    <label for="prixNego" class="sr-only">Votre proposition</label>
                    <input type="number" class="form-control" name="prixNego" placeholder="Proposition" required>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Soumettre</button>

            </form>
        </div>
</div>

@endforeach


<br><br>



@endsection
