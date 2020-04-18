@extends('layouts.app')

@section('content')
<form action="/edit" method="POST" >
	@csrf
	<br>
	<h1>Edit ventes</h1>
	<div classe ='form-group'>
		
	
	<input type="hidden" name="id" value="{{$data->id}}" >

	<input type="text" name="title"value="{{$data->title}}" placeholder="Nom de l'article">
	<br></br>

	<input type="text" name="description"value="{{$data->description}}" placeholder="description">
	<br></br>



	<input type="number" name="prixFixe"value="{{$data->prixFixe}}" placeholder="Prix fixe de l'article">
	<br></br>

	<input type="text" name="slug" placeholder="slug">
	<br></br>
  	<label for="category">Catégorie de l'object</label>
                        <select class="custom-select" name="category" required>
                            <option selected disabled value="">--Choisir--</option>
                            <option>Bon pour le musée</option>
                            <option>Vip</option>
                            <option>Ferraille ou trésor</option>
                           
                        </select>

	<br></br>
	
	                   
                        <label for="typeVente">Type de Vente</label>
                        <select class="custom-select" name="typeVente" required>
                            <option selected disabled value="">--Choisir--</option>
                            <option>NEGO</option>
                            <option>ACHATD</option>
                            <option>ENCHERE</option>
                           
                        </select>
                    </div>

	<button type ="submit">vendre</button>
	</div>
	</form>
</body>

</html>
@stop