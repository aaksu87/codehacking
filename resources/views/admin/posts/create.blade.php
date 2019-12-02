@extends('layouts.admin')


@section('content')
    <h1>create post</h1>


    {!! Form::open(['method'=>'post', 'action'=> 'AdminPostsController@store','files'=>true]) !!}
    <div class="form-group">

        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('content','Content') !!}
        {!! Form::text('content',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('category_id','Status') !!}
        {!! Form::select('category_id',array(1 => "active", 0 => "not Active"), 0,['class'=>'form-control']) !!}
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

    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}


    @include('includes.form_error')

@stop