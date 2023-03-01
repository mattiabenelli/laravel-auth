@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between py-4">
        <div>Progetti recenti</div>
        <div>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary">Aggiungi nuovo progetto</a>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <th>id</th>
            <th>titolo</th>
            <th>content</th>
            <th>slug</th>
            <th>azioni</th>
        </thead>
        <tbody>
            @foreach ($projects as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->slug }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection