@extends('sites.layout')

@section('content')



<div class="row">
    <div class="col align-self-start">
     <a   class="btn btn-primary" href="{{route('sites.index')}}" >All products</a>
    </div>
     
</div>

<br>


<div class="mb-3">
  <h3>Name : {{$site->name}}</h3>  
</div>
<div class="mb-3">
   <p><b>description : </b> {{$site->description}}</p>
</div>





@endsection