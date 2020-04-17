@extends('layouts.app')


@section('content')


<div class="flex-center position-ref full-height">
     <div class="content">
          <div class="title m-b-md">
               SALL
          </div>

          <div class="container">
		<br><br>
		<div class="row">
		
		<div class="col">
					@foreach($posts as $GetPost)
					<span>{{ $GetPost->title }}</span> 
					<p>                         </p>
					<span>{{ $GetPost->description }}</span>
					
					<span>{{ $GetPost->prixFixe }}</span>
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




