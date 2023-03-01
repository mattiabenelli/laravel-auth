@extends('layouts.admin');
@section('content')
    <table class="table">
        <thead>
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
                    <td>{{ $item->slug }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection