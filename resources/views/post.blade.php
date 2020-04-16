@extends('layouts.app')


@section('content')


<div class="flex-center position-ref full-height">
     <div class="content">
          <div class="title m-b-md">
               ACHETER
          </div>

          <div class="container">
		<br><br>
		<div class="row">
		@foreach($posts as $GetPost)
		<div class="col-md-3">
				
					<span>{{ $GetPost->id }}</span>
					<span>{{ $GetPost->title }}</span>
					<span>{{ $GetPost->slug }}</span>
			</div>
		@endforeach
		</div>
	</div>
         
         
          @foreach($posts as $GetPost)


          @endforeach


     </div>
</div>

@endsection




