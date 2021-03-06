@extends('layouts.admin')


@section('content')


    @if(\Illuminate\Support\Facades\Session::has('deleted_user'))
        <p>{{session('deleted_user')}}</p>

    @endif

    <h1>users</h1>


    <table class="table">

        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{route('users.edit',$user->id)}}"> {{$user->name}}</a></td>
                    <td><img height="100" src="{{$user->photo ? $user->photo->path: 'no'}}"></td>
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