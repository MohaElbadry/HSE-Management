@extends('risks.layout')

@section('content')
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach

            </ul>
        </div>
    @endif


    <div class="table-responsive">
        <a class="btn btn-info" href="{{ route('risks.create') }}">Creacte</a>
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>deascription</th>
                    <th>user_ID</th>
                    <th>Projet_id</th>
                    <th>Action</th>
                </tr>
            </thead>


            <tbody class="table-group-divider">
                @foreach ($risks as $item)
                <tr class="table-primary">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->lib }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->projet_id }}</td>
                        <td>
                            <form action="{{ route('risks.destroy', $item->id) }}" method="post">
                            @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a class="btn btn-primary" href="{{ route('risks.edit', $item->id) }}">Edit</a>
                            <a class="btn btn-info" href="{{ route('risks.show', $item->id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
            <tfoot>

            </tfoot>
        </table>

    </div>



@endsection
