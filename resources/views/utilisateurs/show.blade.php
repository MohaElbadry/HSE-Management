@extends('utilisateurs.layout')

@section('content')



<div class="row">
    <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('utilisateurs.index')}}" >All products</a>
    </div>
     
</div>

<br>


<div class="mb-3">
  <h3>Name : {{$site->name}}</h3>  
</div>
<div class="mb-3">
   <p><b>Id : </b> {{$site->id}}</p>
</div>
<div class="mb-3">
   <p><b>description : </b> {{$site->email}}</p>
</div>

<div class="mb-3">
   <p><b>description : </b> {{$site->password}}</p>
</div>

<div class="mb-3">
   <p><b>description : </b> {{$site->role}}</p>
</div>




@endsection