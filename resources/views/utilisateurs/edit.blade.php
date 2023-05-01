@extends('utilisateurs.layout')

@section('content')

<div class="container p-5">
     <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('utilisateurs.index')}}" >All products</a>
    </div>
    <form action="{{route('utilisateurs.update',$utilisateur->id)}}" method="post">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="rr">name</label>
        <input type="text" name="name" value="{{$utilisateur->name}}" class="form-control" id="rr">
    </div>

    <div class="mb-3">
        <label for="rr">Email</label>
        <input type="email" value="{{$utilisateur->email}}"name="Email" class="form-control" id="rr">
    </div>

    <div class="mb-3">
        <label for="rrr">password</label>
        <input type="password" name="password" value="{{$utilisateur->password}}" class="form-control" id="rrr">
    </div>

    <select class="form-select"    name="role" > 
        <option value="U" {{ $utilisateur->role == 'U' ? 'selected' : '' }}>User</option>
        <option value="A" {{ $utilisateur->role == 'A' ? 'selected' : '' }}>Admin</option>
        <option value="T" {{ $utilisateur->role == 'T' ? 'selected' : '' }}>Technician</option>
    
    </select> 


    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

@endsection