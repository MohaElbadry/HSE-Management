@extends('incidents.layout')

@section('content')

<div class="container p-5">
     <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('incidents.index')}}" >All products</a>
    </div>
    <form action="{{route('incidents.update',$incident->id)}}" method="post">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="rr">lib</label>
        <input type="text" name="lib" value="{{$incident->lib}}" class="form-control" id="rr">
    </div>
    <div class="mb-3">
        <label for="rrr">description</label>
        <input type="text" name="description" value="{{$incident->description}}" class="form-control" id="rrr">
    </div>




    {{-- ID_ite --}}
    
    <label >SITE</label>
     <select class="form-select" name="projet_id">

    @foreach($projets as $item)
        <option value="{{ $item->id }}" {{  $item->id == $incident->projet_id ? 'selected' : '' }}>{{ $item->name }}</option>
    @endforeach
    </select>


    <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

@endsection