@extends('layouts.app')

@section('content')
<html>

<body>
	<form action="submit" method="POST" >
	@csrf
	<br></br>
	<div classe ='form-group'>
		
	
	<input type="text" name="nom" placeholder="Nom de l'article">
	<br></br>

	<input type="text" name="description" placeholder="description">
	<br></br>

	<input type="number" name="prix" placeholder="Prix de l'article">
	<br></br>

	<button type ="submit">vendre</button>
	</div>
	</form>
</body>

</html>
@endsection
