@extends('layouts.app')

@section('title')
 LISTE DES PRODUITS EN VENTE  
@stop
@section('content')
		<FONT size="20pt">
			<style>
			#link { color: #414141;}
			</style>
        <a id="link" href="/post/bonpourlemusée">&bull;Bon pour le musée      </a>
        <br>

		<a id="link" href="/post/vip">&bull;Vip    </a>
		<br>
		<a id="link" href="/post/ferraille">&bull;Ferraille       </a>

	</FONT>
<div class="flex-center position-ref full-height">
     <div class="content">


          <div class="container">
		<br><br>
		<div class="col">
		
		<div class="col">
			
					<!--@foreach($posts as $GetPost)
					<a href="/post/{{ $GetPost->title }}">{{ $GetPost->title }} </a>
					<h1>    </h1>
					
						
						
					<tr>		
						<td>			
					<a id="link" href="/post/{{ $GetPost->title }}">{{ $GetPost->title }} </a>
					
						</td><td>
					<span> // {{ $GetPost->description }}</span>
						</td><td>
					<span>// {{ $GetPost->prixFixe}}</span>
						</td><td>
					<span> // {{ $GetPost->category}}</span>
				    	</td>
				    </tr>
				</table>
				
				
					<br>
					@endforeach-->
					
			</div>
		
		</div>
	</div>
         
         



     </div>
</div>

@endsection




