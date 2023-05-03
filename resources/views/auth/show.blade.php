@extends('projets.layout')

@section('content')



<div class="row">
    <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('risks.index')}}" >All products</a>
    </div>
     
</div>

<br>


<div class="mb-3">
  <h3>Name : {{$projet->name}}</h3>  
</div>
<div class="mb-3">
   <p><b>description : </b> {{$projet->description}}</p>
</div>





@endsection