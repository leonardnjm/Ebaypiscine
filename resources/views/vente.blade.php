@extends('layouts.app')

@section('title')
Liste des ventes
@endsection
@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<div class="flex-top position-ref full-height">
     <div class="content">


        <div class="container">
		<br><br>
			<div class="col">
		
			<table class="table">
				<thead>
						<tr>
							<th scope="col">Titre</th>
							<th scope="col">Description</th>
							<th scope="col">Prix</th>
							<th scope="col">Categorie</th>
							<th scope="col">Type de Vente</th>
							<th scope="col">Operations</th>


						</tr>

				</thead>
			
					@foreach($posts as $GetPost)
					<tr>
						<th scope="col">{{ $GetPost->title }}</th>
						<td>{{ $GetPost->description }}</td>
						<td>{{ $GetPost->prixFixe }}</td>
						<td>{{ $GetPost->category }}</td>
						<td>{{ $GetPost->typeVente }}</td>

						<td>
						<a href="/delete/{{$GetPost->id}}"><i class="fa fa-trash"></i></a>

						
						<a href="/edit/{{$GetPost->id}}"><i class="fa fa-edit"></i></a>

					</td>
						
					
						
						
					</tr>
					@endforeach
					</table>		
									


					
										<input type=button onclick=window.location.href='http://127.0.0.1:8000/formulairevente'; value=Vendre />
			</div>
			</div>	
					
			</div>
		
	</div>


</div>
@endsection