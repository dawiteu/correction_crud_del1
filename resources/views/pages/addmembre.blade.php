@extends('layouts.index')


@section('content')
    <h5>Ajoutation d'un membre: </h5>
    <form class="form" action={{route('addm2')}} method="post">
        @csrf
        <label class="sr-only" for="name">Nom:</label>
        <div class="input-group mb-2 mr-sm-2 w-50">
            <div class="input-group-prepend">
            <div class="input-group-text">Nom</div>
            </div>
            <input name="name" type="text" class="form-control" id="name" placeholder="votre nom?">
        </div>

        <label class="sr-only" for="age">age</label>
        <div class="input-group mb-2 mr-sm-2 w-50">
            <div class="input-group-prepend">
            <div class="input-group-text">Age &nbsp;</div>
            </div>
            <input name="age" type="number" class="form-control" id="age" placeholder="Age? 10-99" min="10" max="99">
        </div>

        <label class="sr-only" for="genre">genre</label>
        <div class="input-group mb-2 mr-sm-2 w-50">
            <div class="input-group-prepend">
            <div class="input-group-text">Genre</div>
            </div>
            <select name="genre" class="form-control">
                <option value="femme">Femme</option>
                <option value="homme">Homme</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <input type="submit" value="Ajouter >>" class="btn btn-success">
    </form>
@endsection