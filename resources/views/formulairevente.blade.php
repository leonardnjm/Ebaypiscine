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
        <select name="typeVente"  onchange="updateCheckBox(this)">
            <option>-- Select --</option>
            <option value="Vente immediate">Vente immediate</option>
            <option value="Enchère">Enchere</option>
            <option value="Vente négociable">Vente négociable</option>
            <option value="Enchère et vente immédiate">Enchere et vente immédiate</option>
             
        </select>

            
        </p>
    </div>

    <div id="div" 
        style="margin-top:10px;display:block;color:green;">
    </div>
</body>

<script>
    function updateCheckBox(opts) {
        var chks = document.getElementsByName("typeVente");

        if (opts.value == 'Vente immediate') {
           
                
                document.getElementById('div').innerHTML = 'Checkboxes enabled';
                document.getElementById('div').innerHTML='Prix fixe: <input type="text" name="prixFixe" />';

                
            
        }
        else if (opts.value == 'Vente négociable') {
            
            document.getElementById('div').innerHTML = 'Checkboxes enabled';
            document.getElementById('div').innerHTML='Prix négociable: <input type="number" name="prixMax" />';
        
            
        }
        else if (opts.value == 'Enchère et vente immédiate') {

            
                
               
               document.getElementById('div').innerHTML = 'Checkboxes enabled';
                 document.getElementById('div').innerHTML='Prix fixe: <input type="text" name="Prixfixe" />';
         
            
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
