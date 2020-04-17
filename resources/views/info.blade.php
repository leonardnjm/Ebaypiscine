@extends('layouts.app')
@section('title')
Profile
@stop

@section('content')
<html>

<body>

   
    <div class="row flex-center">
        <div class="pb-4 col-lg-3">
<!--       @foreach($infos as $GetInfo)-->
            @if($GetInfo->id == 1)
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
<!--
					<span>Dernière mise à jour il y a{{ $GetInfo->updated_at }}</span>
					<br>
-->
            @endif
		
<!--		@endforeach-->
		</div>

        <div class="pb-4 col-lg-9">
            <form action="profile" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="form-row">
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

                </div>
                <div class="form-row">
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
                </div>
                <button class="btn btn-secondary btn-block" type="submit">Enregistrer</button>
            </form>
        </div>
    </div>
	
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

</body>

</html>
@endsection
