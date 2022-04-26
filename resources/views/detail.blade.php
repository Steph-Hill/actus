@extends("layouts.app")

@section("content")
        
    <h1>Détails</h1>

    
        <h2>{{$actu->titre}}</h2><br><br>
        <h3>{{$actu->detail}}</h3><br><br>
        <h4>{{$actu->created_at}}</h4>

        <form action="/update/{{$actu->id}}" method="POST">

            @csrf

            <label for="">Mon titre</label><br>

            <input type="text" name="titre" {{-- 1 --}}value="{{$actu->titre}}"><br>

            <label for="">Mes details</label><br>
            
            <input type="text" name="detail" value="{{$actu->detail}}"><br><br>

            <button type="submit">Ajouter</button>
        
        </form>

        
   

@endsection

