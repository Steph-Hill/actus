
@extends("layouts.app")

@section("content")

    <h1>Accueil</h1>

        @forelse ($news as $item)

            <a href="/modifier/{{$item->id}}}">Modifier</a>
        

            <a href="/detail/{{$item->id}}">{{$item->titre}}</a><br>

            <a href="/delete/{{$item->id}}">Supprimer</a><br>

           
            
            @empty

            <h2>Pas d'actualitées !</h2>

        @endforelse

        
    
@endsection
        
