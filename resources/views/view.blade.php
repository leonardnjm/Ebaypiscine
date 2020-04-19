@extends('layouts.app')


@section('title')


@stop

@section('content')
@foreach($post as $GetPost)
<h1>{{$GetPost->title}}</h1>
@endforeach

@foreach($post as $GetPost)
<button type="submit">Ajouter au panier</button>
<br>
<img src="{{asset($GetPost->image)}}" style="height:300px;width:300px; margin-right:15px">
<br><br>

<h1> Description de l'objet </h1>
<br><br>
{{$GetPost->description}}
<br><br>

<h5> Prix de l'objet: {{$GetPost->prixFixe}} € </h5>
<br>
@endforeach

<nav>
     <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Echerir</a>
          
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Acheter imediatement</a>
         
           <a class="nav-item nav-link disabled" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Negotier prix</a>
     </div>
</nav>

<div class="tab-content" id="nav-tabContent">
     
     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <br> <br>
    
 
  <div class="form-group mb-2">
    <label for="Prix que vous proposr" class="sr-only">prixProp</label>
    <input type="text" readonly class="form-control-plaintext" id="prixaentrer" value="Prix:">
  </div>
  
<form action="enchere" method="GET" class="form-inline">
  <div class="form-group mx-sm-2 mb-2">
    <label for="prixVariable" class="sr-only">prixVariable</label>
    <input type="number" class="form-control" name="prixVariable" placeholder="Nouveau prix a encherir">
  </div>
  
  <button type="submit" class="btn btn-primary mb-2">Confirmer enchere</button>
</form>
          </div>  

     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
     
     <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div> 
 

<br><br>



@endsection
