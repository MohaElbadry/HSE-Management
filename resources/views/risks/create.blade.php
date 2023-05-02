@extends('risks.layout')

@section('content')

<div class="container p-5">
     <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('risks.index')}}" >All products</a>
    </div>
    <form action="{{route('risks.store')}}" method="post">
        @csrf
    <div class="mb-3">
        <label for="rr">lib</label>
        <input type="text" name="lib" class="form-control" id="rr">
    </div>
    <div class="mb-3">
        <label for="rrr">description</label>
        <input type="text" name="description" class="form-control" id="rrr">
    </div>
    

    {{-- ID_Technicien --}}

    <select class="form-select" name="projet_id">
    @foreach($projets as $projet)
        <option value="{{ $projet->id }}">{{ $projet->name }}</option>
    @endforeach
    </select>
    
    {{-- ID_ite --}}
    
     <select class="form-select" name="user_id">
    @foreach($utilisateurs as $utilisateur)
        <option value="{{ $utilisateur->id }}">{{ $utilisateur->name }}</option>
    @endforeach
    </select>

    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

@endsection