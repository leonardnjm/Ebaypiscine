@extends('layouts.app')

@section('title')

@stop
@section('content')
        <a href="/post/bonpourlemusée">Bon pour le musée      </a>

		<a href="/post/vip">Vip    </a>
		<a href="/post/ferraille">Ferraille       </a>

<div class="flex-center position-ref full-height">
     <div class="content">
          <div class="title m-b-md">
               LISTE DES PRODUITS EN VENTE  
          </div>

          <div class="container">
		<br><br>
		<div class="col">
		
		<div class="col">
			
					@foreach($posts as $GetPost)
					<a href="/post/{{ $GetPost->title }}">{{ $GetPost->title }} </a>
					<h1>    </h1>
					
					<span>  {{ $GetPost->description }}</span>
					
					<span> {{ $GetPost->prixFixe}}</span>
					<span> // {{ $GetPost->category}}</span>
					
					<br>
					@endforeach
					
			</div>
		
		</div>
	</div>
         
         



     </div>
</div>

@endsection




