@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Formations</h1>
        <a href="{{ route('formations.create') }}" class="mb-3 btn btn-primary">Add New Formation</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formations as $formation)
                    <tr>
                        <td>{{ $formation->id }}</td>
                        <td>{{ $formation->title }}</td>
                        <td>
                            <a href="{{ route('formations.edit', $formation->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
