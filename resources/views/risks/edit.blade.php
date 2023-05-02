@extends('risks.layout')

@section('content')

<div class="container p-5">
     <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('risks.index')}}" >All products</a>
    </div>

    <form action="{{route('risks.update',$risk->id)}}" method="post">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="rr">lib</label>
        <input type="text" name="name" value="{{$risk->lib}}" class="form-control" id="rr">
    </div>
    <div class="mb-3">
        <label for="rrr">description</label>
        <input type="text" name="description" value="{{$risk->description}}" class="form-control" id="rrr">
    </div>



    {{-- ID_Technicien --}}

    <label for="rrr">USER</label>
    <select class="form-select" name="user_id">
    @foreach($utilisateurs as $user)
        <option value="{{ $user->id }}" {{  $user->id == $risk->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
    @endforeach
    </select>
    
    <br/>
    <br/>
    {{-- ID_ite --}}
    
    <label >SITE</label>
     <select class="form-select" name="projet_id">

    @foreach($projets as $item)
        <option value="{{ $item->id }}" {{  $item->id == $risk->projet_id ? 'selected' : '' }}>{{ $item->name }}</option>
    @endforeach
    </select>


    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

@endsection