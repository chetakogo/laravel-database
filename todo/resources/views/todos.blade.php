@extends('layouts.main')
@section('content')

    <table style="text-align: center">
        <th>
            <tr>
                <td>id</td>
                <td>title</td>
                <td>Description</td>
                <td>Created</td>
                <td>Updated</td>
            </tr>
        </th>
        @foreach($todos as $todo)
            <tr>
                <td>
                    <a href="{{ route('todo.show', ['todo' => $todo->id]) }}">
                        {{ $todo->id }}
                    </a>
                </td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->created_at }}</td>
                <td>{{ $todo->updated_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection
