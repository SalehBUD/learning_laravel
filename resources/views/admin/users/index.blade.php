@extends('layouts.admin')








@section('content')


    <table class="table">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>

        <tbody>

            @if($users)

                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{ $user->is_active == 1 ? 'Active' : 'Deactive' }}</td>
                    <td>{{$user->created_at->diffForhumans()}}</td>
                    <td>{{$user->updated_at->diffForhumans()}}</td>
                </tr>
                @endforeach

            @endif
        </tbody>

    </table>










@endsection
