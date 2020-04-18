@extends('layouts.app')

@section('content')
<html>

<body>
   @section('title')
   Ajouter un produit en vente 
   @stop
    <form action="submit" method="POST" class="needs-validation" novalidate>
        @csrf
        <br>
        <div classe='form-group'>



            <input type="text" class="form-control" name="title" placeholder="Nom de l'article" required>
            <br><br>

            <input type="text" class="form-control" name="description" placeholder="description" required>
            <br><br>



            <input type="number" class="form-control" name="prixFixe" placeholder="Prix fixe de l'article" required>
            <br><br>

            <input type="text" class="form-control" name="slug" placeholder="slug" required>
            <br><br>
            <label for="category">Catégorie de l'object</label>
            <select class="custom-select" name="category" required>
                <option selected disabled value="">--Choisir--</option>
                <option>Bon pour le musée</option>
                <option>Vip</option>
                <option>Ferraille ou trésor</option>

            </select>

            <br><br>


            <label for="typeVente">Type de Vente</label>
            <select class="custom-select" name="typeVente" required>
                <option selected disabled value="">--Choisir--</option>
                <option>Meilleure Offre</option>
                <option>Achat immédiat</option>
                <option>Enchere</option>
                <option>Achat immédiat et Meilleure offre</option>

            </select>
        <br><br>

        <button type="submit">vendre</button>
        </div>
    </form>
</body>

</html>
@endsection
