@extends('layouts.app')


@section('content')


<div class="flex-center position-ref full-height">
     <div class="content">
          <div class="title m-b-md">
               LISTE DES PRODUITS EN VENTE
          </div>

          <div class="container">
		<br><br>
		<div class="row">
		
		<div class="col">
					@foreach($posts as $GetPost)
				
					<span> nom : {{ $GetPost->title }}</span>
				
					<span>Description :{{ $GetPost->description }}</span>
					
					<span>Prixfixe : {{ $GetPost->prixFixe }}</span>
					<br>
					@endforeach
			</div>
		
		</div>
	</div>
         
         
          @foreach($posts as $GetPost)


          @endforeach


     </div>
</div>

@endsection




