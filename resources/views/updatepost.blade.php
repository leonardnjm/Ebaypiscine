@extends('layouts.app')

@section('content')
<form action="/edit" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
    @csrf
    <br>
    <h1>Renseignez les informations à modifier</h1>
    <div classe='form-group'>

        <div class="row rounded border border-secondary p-5">
            <div class="col-md-6">
                <input type="text" class="form-control" name="title" placeholder="Nom de l'article" required>
                <br><br>
            </div>

            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="inputGroupFile01" placeholder="choisissez l'image"></label>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="col-md-12">
                <input type="text" class="form-control" name="description" placeholder="description" required>
                <br><br>
            </div>

            <div class="col-md-6">
                <label for="category">Catégorie de l'object</label>
                <select class="custom-select" name="category" required>
                    <option selected disabled value="">--Choisir--</option>
                    <option>Bon pour le musée</option>
                    <option>Vip</option>
                    <option>Ferraille ou trésor</option>

                </select>
            </div>

            <br><br>

            <div class="col-md-6">
                <label for="category">Type de vente</label>
                <select name="typeVente" class="custom-select" onchange="updateCheckBox(this)">
                    <option>-- Select --</option>
                    <option value="Vente immediate">Vente immediate</option>
                    <option value="Enchère">Enchere</option>
                    <option value="Vente négociable">Vente négociable</option>
                    <option value="Enchère et vente immédiate">Enchere et vente immédiate</option>

                </select>

            </div>

            <div id="div" class="mt-5">
            </div>

            <br><br>

            <div class="col-12 mt-5 flex-center">
                <br>
                <br>
                <button class="btn btn-dark" type="submit">vendre</button>
            </div>
        </div>
    </div>
</form>
<style>
    body,
    select {
        font: 14px Verdana;

    }

</style>

<script>
    function updateCheckBox(opts) {
        var chks = document.getElementsByName("typeVente");

        if (opts.value == 'Vente immediate') {
            document.getElementById('div').innerHTML = '<input class="form-control" type="number" name="prixFixe" placeholder="Prix" />';



        } else if (opts.value == 'Vente négociable') {
            document.getElementById('div').innerHTML = 'Prix négociable: <input class="form-control" type="number" name="prixMax" placeholder="Prix"/>';


        } else if (opts.value == 'Enchère et vente immédiate') {
            document.getElementById('div').innerHTML = 'Prix fixe: <input class="form-control" type="number" name="Prixfixe" placeholder="Prix"/>';


        } else document.getElementById('div').innerHTML = '';
    }

</script>
@stop
