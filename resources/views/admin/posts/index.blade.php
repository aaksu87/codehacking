@extends('layouts.admin')


@section('content')


    @if(\Illuminate\Support\Facades\Session::has('deleted_posts'))
        <p>{{session('deleted_posts')}}</p>

    @endif

    <h1>posts</h1>


    <table class="table">

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->photo_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                </tr>
            @endforeach
        @endif
    </table>
@stop