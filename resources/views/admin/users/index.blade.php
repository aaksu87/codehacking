@extends('layouts.admin')


@section('content')
    <h1>users</h1>


    <table class="table">

        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->role_name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Passive'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
        @endif
    </table>
@stop