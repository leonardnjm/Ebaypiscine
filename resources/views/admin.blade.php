@extends('layouts.app')

@section('title')
Administration
@endsection
@section('content')

<nav class="ml-5">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Objet en vente</a>

        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Utilisateurs</a>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
@if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif


        <div class="flex-top position-ref full-height">
            <div class="content">


                <div class="container flex-center">
                    <br><br>
                    <div class="col">

                        <table class="table rounded bg-light">
                            <thead>
                                <tr>
                                    <th scope="col">Vendeur</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Categorie</th>
                                    <th scope="col">Type de Vente</th>
                                    <th scope="col">Operations</th>


                                </tr>

                            </thead>

                            @foreach($posts as $GetPost)
                            <tr>
                                <th class="pt-5" scope="col">{{ $GetPost->name }}</th>
                                <th class="pt-5">{{ $GetPost->title }}</th>
                                <td><img src="{{asset($GetPost->image)}}" class="rounded" style="height:100px;width:100px; margin-right:15px"></td>
                                <td class="pt-5">{{ $GetPost->description }}</td>
                                <td class="pt-5">{{ $GetPost->prixFixe }}{{ $GetPost->prixMax }}</td>
                                <td class="pt-5">{{ $GetPost->category }}</td>
                                <td class="pt-5">{{ $GetPost->typeVente }}</td>

                                <td class="pt-5">
                                    <a href="/delete/{{$GetPost->id_post}}"><i class="fa fa-trash"></i></a>


                                    <a href="/edit/{{$GetPost->id_post}}"><i class="fa fa-edit"></i></a>

                                </td>




                            </tr>
                            @endforeach
                        </table>




                        <input class="btn btn-dark" type=button onclick=window.location.href='http://127.0.0.1:8000/vendre/formulairevente' ; value=Vendre />
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div class="flex-top position-ref full-height">
            <div class="content">


                <div class="container flex-center">
                    <br><br>
                    <div class="col">

                        <table class="table rounded bg-light">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Operations</th>


                                </tr>

                            </thead>

                            @foreach($user as $GetUser)
                            <tr>
                                <th class="pt-5" scope="col">{{ $GetUser->name }}</th>
                                <td><img src="{{asset($GetUser->avatar)}}" class="rounded" style="height:100px;width:100px; margin-right:15px"></td>
                                <td class="pt-5">{{ $GetUser->email }}</td>
                                <td class="pt-5">{{ $GetUser->role }}

                                <td class="pt-5">
                                    <a href="/supprimer/{{$GetUser->id}}"><i class="fa fa-trash"></i></a>
                                    
                                    <a href="/{{$GetUser->id}}"><i class="fa fa-edit"></i></a>

                                </td>




                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>





@endsection
