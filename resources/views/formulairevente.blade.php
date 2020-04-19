@extends('layouts.app')

@section('content')
<html>

<body>
    @section('title')
    Ajouter un produit en vente
    @stop
    <form action="submit" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
        @csrf
        <br>
        <div classe='form-group'>



            <input type="text" class="form-control" name="title" placeholder="Nom de l'article" required>
            <br><br>

            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <br><br>

            <input type="text" class="form-control" name="description" placeholder="description" required>
            <br><br>



            <input type="number" class="form-control" name="prixFixe" placeholder="Prix fixe de l'article" required>
            <br><br>

     
            <label for="category">Catégorie de l'object</label>
            <select class="custom-select" name="category" required>
                <option selected disabled value="">--Choisir--</option>
                <option>Bon pour le musée</option>
                <option>Vip</option>
                <option>Ferraille ou trésor</option>

            </select>

            <br><br>

            <style>
        body, select {
            font:14px Verdana;
           
        }
    </style>
<body>
    <div>
        Type de vente: <br>
        <select id="sel" onchange="updateCheckBox(this)">
            <option>-- Select --</option>
            <option value="Vente">Vente immediate</option>
            <option value="Enchere">Enchere</option>
        </select>
        <p>
            <input type="checkbox" name="offer" disabled="disabled" id="chk1" /> Prix negociable <br />
            
        </p>
    </div>

    <div id="div" 
        style="margin-top:10px;display:block;color:green;">
    </div>
</body>

<script>
    function updateCheckBox(opts) {
        var chks = document.getElementsByName("offer");

        if (opts.value == 'Vente') {
            for (var i = 0; i <= chks.length - 1; i++) {
                chks[i].disabled = false;
                document.getElementById('div').innerHTML = 'Checkboxes enabled';
                document.getElementById('div').innerHTML='OtherR: <input type="text" name="other" />';
                
            }
        }
        else if (opts.value == 'Enchere') {
            for (var i = 0; i <= chks.length - 1; i++) {
                chks[i].disabled = true;
                chks[i].checked = false;
                document.getElementById('div').innerHTML = 'Checkboxes disabled and unchecked';
                 document.getElementById('div').innerHTML='OtherR: <input type="text" name="other" />';
            }
        }
        else document.getElementById('div').innerHTML='';
    }
</script>
            <br><br>

            <button type="submit">vendre</button>
        </div>
    </form>
</body>

</html>
@endsection
