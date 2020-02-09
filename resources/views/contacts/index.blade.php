@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- TODO href de la balise <a> pour pointer vers la route de création de contact -->
                <a class="btn btn-primary float-right" href="#">Ajouter un contact</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du contact</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- TODO : Début de la boucle -->
                    @forelse ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->tel}}</td>
                        <td>{{$contact->email}}</td>
                        <td>
                            <!-- TODO href de la balise <a> pour pointer vers la route de modification du contact -->
                            <a class="btn btn-primary" href="">Modifier</a>


                            <a class="btn btn-danger"
                               onclick="document.getElementById('delete-form-{{$contacts->id}}').submit()">Supprimer</a>
                            <form id="delete-form-{{$contacts->id}}">
                                <!-- TODO Form pour la suppression d'un contact -->
                            </form>
                        </td>
                    </tr>
                    @empty
                    <!-- TODO : Conditions pas de contact -->
                    <tr>
                        <td>Vous n'avez pas encore de contact</td>
                    </tr>
                    <!-- TODO : FIN Boucle -->
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
