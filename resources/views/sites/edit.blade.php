@extends('sites.layout')

@section('content')

<div class="container p-5">
     <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('sites.index')}}" >All products</a>
    </div>
    <form action="{{route('sites.update',$site->id)}}" method="post">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="rr">name</label>
        <input type="text" name="name" value="{{$site->name}}" class="form-control" id="rr">
    </div>
    <div class="mb-3">
        <label for="rrr">description</label>
        <input type="text" name="description" value="{{$site->description}}" class="form-control" id="rrr">
</div>


    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

@endsection