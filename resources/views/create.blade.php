@extends("layouts.app")


@section("content")


    <h1>Formulaire d'ajout :</h1>


        <form action="/save" method="POST">

            @csrf

            <label for="">Mon titre</label><br>

            <input type="text" name="titre"><br>

            <label for="">Mes details</label><br>
            
            <input type="text" name="detail"><br><br>

            <button type="submit">Ajouter</button>
        
        </form>

  
@endsection