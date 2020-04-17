@extends('layouts.app')

@section('content')
<html>

<body>
	<form action="submit" method="POST" >
	@csrf
	<br>
	<div classe ='form-group'>
		
	
	<input type="text" name="nom" placeholder="Nom de l'article">
	<br>

	<input type="text" name="description" placeholder="description">
	<br>

	<input type="number" name="prix" placeholder="Prix de l'article">
	<br>

	<button type ="submit">vendre</button>
	</div>
	</form>
</body>

</html>
@endsection
