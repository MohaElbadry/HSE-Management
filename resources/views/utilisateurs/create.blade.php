@extends('utilisateurs.layout')

@section('content')

<div class="container p-5">
     <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('utilisateurs.index')}}" >All products</a>
    </div>
    <form action="{{route('utilisateurs.store')}}" method="post">
        @csrf
    <div class="mb-3">
        <label for="r">name</label>
        <input type="text" name="name" class="form-control" id="r">
    </div>

    <div class="mb-3">
        <label for="rr">Email</label>
        <input type="email" name="email" class="form-control" id="rr">
    </div>

    <div class="mb-3">
        <label for="rrr">password</label>
        <input type="password" name="password" class="form-control" id="rrr">
    </div>
    

    <select class="form-select"  name="role" aria-label="Default select example">
        <option value="">--choose---</option>
        <option value="U">User</option>
        <option value="A">Admin</option>
        <option value="T">Technicien</option>
    </select> 
    

    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

@endsection