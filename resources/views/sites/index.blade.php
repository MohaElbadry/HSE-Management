@extends('sites.layout')

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
        <a class="btn btn-info" href="{{ route('sites.create') }}">Creacte</a>
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>deascription</th>
                    <th>Action</th>
                </tr>
            </thead>


            <tbody class="table-group-divider">
                @foreach ($sites as $item)
                <tr class="table-primary">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <form action="{{ route('sites.destroy', $item->id) }}" method="post">
                            @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a class="btn btn-primary" href="{{ route('sites.edit', $item->id) }}">Edit</a>
                            <a class="btn btn-info" href="{{ route('sites.show', $item->id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
            <tfoot>

            </tfoot>
        </table>

    </div>



@endsection
