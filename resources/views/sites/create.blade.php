@extends('sites.layout')

@section('content')

<div class="container p-5">
     <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('sites.index')}}" >All products</a>
    </div>
    <form action="{{route('sites.store')}}" method="post">
        @csrf
    <div class="mb-3">
        <label for="rr">name</label>
        <input type="text" name="name" class="form-control" id="rr">
    </div>
    <div class="mb-3">
        <label for="rrr">description</label>
        <input type="text" name="description" class="form-control" id="rrr">
    </div>

    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

@endsection