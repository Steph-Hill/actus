@extends("layouts.app")


@section("content")

        <form action="/update" method="POST">

            {{-- Creation d'un input caché portant la valeur de l'id --}}
            <input type="hidden" name="id" value="{{$actu->id}}">

            @csrf

            <label for="">Mon titre</label><br>

            <input type="text" name="titre" value="{{$actu->titre}}"><br>

            <label for="">Mes details</label><br>
            
            <input type="text" name="detail" value="{{$actu->detail}}"><br><br>

            <button type="submit">Ajouter</button>

           

        </form>
    
@endsection