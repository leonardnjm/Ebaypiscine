@extends('layouts.app')

@section('content')
<form action="/edit" method="POST" >
	@csrf
	<br>
	<h1>Renseignez les informations à modifier</h1>
	<div classe ='form-group'>
<!--		@foreach($data as $NewPost)-->
	
	<input type="hidden" name="id_post" value="{{$data->id_post}}" >

	<input type="text" name="title"value="{{$data->title}}" placeholder="Nom de l'article">
	<br>

	<input type="text" name="description"value="{{$data->description}}" placeholder="description">
	<br>



	<input type="number" name="prixFixe"value="{{$data->prixFixe}}" placeholder="Prix fixe de l'article">
<!--	@endforeach-->
	<br>
  	<label for="category">Catégorie de l'object</label>
                        <select class="custom-select" name="category" required>
                            <option selected disabled value="">--Choisir--</option>
                            <option>Bon pour le musée</option>
                            <option>Vip</option>
                            <option>Ferraille ou trésor</option>
                           
                        </select>

	<br>
	
	                   
<label for="typeVente">Type de Vente</label>
                        <select class="custom-select" name="typeVente" required>
                            <option selected disabled value="">--Choisir--</option>
                            <option>Meilleure Offre</option>
                            <option>Achat immédiat</option>
                            <option>Enchere</option>
                            <option>Achat immédiat et Meilleure offre</option>
                           
                        </select>
                    <br>

	<button type ="submit">Modifier votre vente</button>
                    </div>
	<br>
	</form>
@stop