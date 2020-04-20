@extends('layouts.app')

@section('content')
@foreach($data as $GetData)
<form action="{{url('/modifier/')}}/{{ $GetData->id }}" method="POST">
    @csrf
    <br>
    <h1>Modifier le statut</h1>
    <div classe='form-group'>
        <div class="flex-center col-5">
            <select class="custom-select" name="role" required>
                <option selected disabled value="">--Choisir--</option>
                <option>Vendeur</option>
                <option>Acheteur</option>
            </select>
        </div>

        <div class="flex-center">
            <button class="btn btn-dark" type="submit">Enregistrer</button>
        </div>
    </div>
</form>
@endforeach