@extends('layouts.admin')


@section('content')
    <h1>create users</h1>


    {!! Form::open(['method'=>'post', 'action'=> 'AdminUsersController@store','files'=>true]) !!}
        <div class="form-group">

            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('email','Email') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">

            {!! Form::label('is_active','Status') !!}
            {!! Form::select('is_active',array(1 => "active", 0 => "not Active"), 0,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id', $roles, null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image_file','Image') !!}
            {!! Form::file('image_file', null, null,['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Create user',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}


   @include('includes.form_error')

@stop