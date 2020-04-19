@extends('layouts.app')


@section('title')

{{$post->title}}

@stop

@section('content')

<img src="{{asset($post->image)}}" style="height:300px;width:300px; margin-right:15px">
<br><br>
<h1> Description de l'objet </h1>
<br><br>
{{$post->description}}
<br><br>

<h1> Prix de l'objet </h1>
<br>
{{$post->prixFixe}} €

<br><br>

<button type="submit">Ajouter au panier</button>
@endsection