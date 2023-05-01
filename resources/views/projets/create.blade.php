@extends('projets.layout')

@section('content')

<div class="container p-5">
     <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('projets.index')}}" >All products</a>
    </div>
    <form action="{{route('projets.store')}}" method="post">
        @csrf
    <div class="mb-3">
        <label for="rr">name</label>
        <input type="text" name="name" class="form-control" id="rr">
    </div>
    <div class="mb-3">
        <label for="rrr">description</label>
        <input type="text" name="description" class="form-control" id="rrr">
    </div>
    <div class="mb-3">
        <label for="rrr">proj_start</label>
        <input type="date" name="proj_start" class="form-control" id="rrr">
    </div>

    {{-- ID_Technicien --}}

    <select class="form-select" name="user_id">
    @foreach($utilisateurs as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
    @endforeach
    </select>
    
    {{-- ID_ite --}}
    
     <select class="form-select" name="site_id">
    @foreach($sites as $site)
        <option value="{{ $site->id }}">{{ $site->name }}</option>
    @endforeach
    </select>

    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

@endsection