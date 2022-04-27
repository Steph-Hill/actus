@extends("layouts.app")

@section("content")
        
    <h1>Détails</h1>

    
        <h2>{{$actu->titre}}</h2><br><br>
        <h3>{{$actu->detail}}</h3><br><br>
        <h4>{{$actu->created_at}}</h4>

       

        
   

@endsection

