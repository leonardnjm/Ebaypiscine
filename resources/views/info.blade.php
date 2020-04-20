@extends('layouts.app')
@section('title')
Profile
@stop

@section('content')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>

<div class="row flex-center">
    <div class="pb-4 pr-3 col-md-3">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Profil</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Informations Personnelles</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Payement</a>
        </div>
    </div>
    <div class="py-4 px-5 col-md-9 rounded border border-secondary">
        <div class="tab-content flex-center" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
               <div class="row">
                  <div class="col-md-5">
                      <img src="{{asset(Auth::user()->avatar)}}" style="height:250px;width:250px; margin-right:30px">
                      
                  </div>
                   <div class="col-md-7">
                       @foreach($role as $GetRole)
                        <span>Vous êtes un {{ $GetRole->role }}</span>
                        <br>
                        @endforeach
                        @foreach($data as $GetInfo)
                       
                        <span> {{ $GetInfo->name }}</span>
                        <br>
                        <span> {{ $GetInfo->email }}</span>
                        <br>
                        <span>Adresse: {{ $GetInfo->adresse }}</span>
                        <br>
                        <span>Ville: {{ $GetInfo->ville }}</span>
                        <br>
                        <span>Code Postal: {{ $GetInfo->codePostal }}</span>
                        <br>
                        <span>Pays: {{ $GetInfo->pays }}</span>
                        <br>
                        <span>Description: {{ $GetInfo->description }}</span>
                        <br>
                        <span>Créée le {{ $GetInfo->created_at }}</span>
                        <br>
                        <form action="{{url('/vendeur')}}/{{ $GetInfo->id }}"><button class="btn btn-secondary btn-block" type="submit">Devenir Vendeur</button></form>
                        
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="row flex-center">
                    <form action="renseigner" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row px-3">
                            <div class="col-lg-5 mb-3">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" name="adresse" required>
                            </div>

                            <div class="col-lg-5 mb-3">
                                <label for="ville">Ville</label>
                                <input type="text" class="form-control" id="ville" name="ville" required>
                            </div>

                            <div class="col-lg-2 mb-3">
                                <label for="codePostal">Code Postal</label>
                                <input type="text" class="form-control" name="codePostal" required>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label for="pays">Pays</label>
                                <select class="custom-select" name="pays" required>
                                    <option selected disabled value="">--Choisir--</option>
                                    <option>France</option>
                                    <option>Allemagne</option>
                                    <option>Angleterre</option>
                                    <option>Espagne</option>
                                    <option>Grèce</option>
                                    <option>Belgique</option>
                                    <option>Luxembourg</option>
                                    <option>Suisse</option>
                                </select>
                            </div>

                            <div class="col-lg-8 mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" placeholder="Décrivez-vous en quelque mots." required></textarea>
                            </div>
                            <button class="btn btn-secondary btn-block" type="submit">Enregistrer</button>
                        </div>
                    </form>


                </div>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <div class="row flex-center">
                    <form action="carte" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-row px-3">
                            <div class="col-lg-6 mb-2">
                                <label for="numeroCarte">Numéro de la carte</label>
                                <input type="text" class="form-control" name="numeroCarte" required>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <label for="nomTitulaire">Nom du titulaire</label>
                                <input type="text" class="form-control" name="nomTitulaire" required>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <label for="dateExpiration">Date d'expiration</label>
                                <input type="date" class="form-control" name="dateExpiration" required>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label for="crypto">crypto</label>
                                <input type="text" class="form-control" name="crypto" required>
                            </div>
                            <button class="btn btn-secondary btn-block" type="submit">Enregistrer les informations de paiement</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
