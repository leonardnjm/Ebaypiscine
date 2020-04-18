@extends('layouts.app')

@section('content')
<html>

<body>
    <form action="submit" method="POST">
        @csrf
        <br>
        <div classe='form-group'>



            <input type="text" name="title" placeholder="Nom de l'article">
            <br>

            <input type="text" name="description" placeholder="description">
            <br>



            <input type="number" name="prixFixe" placeholder="Prix fixe de l'article">
            <br>

            <input type="text" name="slug" placeholder="slug">
            <br>
            <label for="category">Catégorie de l'object</label>
            <select class="custom-select" name="category" required>
                <option selected disabled value="">--Choisir--</option>
                <option>Bon pour le musée</option>
                <option>Vip</option>
                <option>Ferraille ou trésor</option>

            </select>

            <br>


            <label for="typeVente">Type de Vente</label>
            <select class="custom-select" name="typeVente" required>
                <option selected disabled value="">--Choisir--</option>
                <option>Meilleure Offre</option>
                <option>Achat immédiat</option>
                <option>Enchere</option>
                <option>Achat immédiat et Meilleure offre</option>

            </select>
        <br>

        <button type="submit">vendre</button>
        </div>
    </form>
</body>

</html>
@endsection
