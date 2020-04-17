@extends('layouts.app')

@section('content')
<html>

<body>
	<form action="submit" method="POST" >
	@csrf
	<br>
	<div classe ='form-group'>
		
	

	<input type="text" name="title" placeholder="Nom de l'article">
	<br></br>

	<input type="text" name="description" placeholder="description">
	<br>



	<input type="number" name="prixFixe" placeholder="Prix fixe de l'article">
	<br>

	<input type="number" name="slug" placeholder="slug">

	<br>


	<button type ="submit">vendre</button>
	</div>
	</form>
</body>

</html>
@endsection
