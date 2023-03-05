@extends('layouts.main')
@section('content')
    <table>
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->title }}</td>
            <td>{{ $todo->description }}</td>
            <td>{{ $todo->created_at }}</td>
            <td>{{ $todo->updated_at }}</td>
        </tr>
    </table>
    <a href="{{ route('todo.index') }}">
        <button>Назад</button>
    </a>
@endsection
