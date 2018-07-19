@extends('layouts.app')

@section('content')

    <table class="table mt-5">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $index => $user)
            <tr>
                <td>{{ ++$index }}</td>
                <th scope="row">{{ $user->name }}</th>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection