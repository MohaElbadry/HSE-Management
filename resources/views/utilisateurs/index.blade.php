@extends('utilisateurs.layout')

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
        <a class="btn btn-info" href="{{ route('utilisateurs.create') }}">Creacte</a>
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>role</th>
                    <th>password</th>
                    <th>Action</th>
                </tr>
            </thead>


            <tbody class="table-group-divider">
                @foreach ($utilisateurs as $item)
                <tr class="table-primary">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                            <form action="{{ route('utilisateurs.destroy', $item->id) }}" method="post">
                            @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a class="btn btn-primary" href="{{ route('utilisateurs.edit', $item->id) }}">Edit</a>
                            <a class="btn btn-info" href="{{ route('utilisateurs.show', $item->id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
            <tfoot>

            </tfoot>
        </table>

    </div>



@endsection
