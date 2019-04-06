@extends('layouts.app')
@section('content')
<a class="btn btn-default" href="/posts">Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:800px; height: 400px" src="/storage/cover_images/{{$post->cover_image}}" alt="Picture">
    <br>
    <p>{{$post->body}}</p>
    <hr>
    <small>by: {{$post->user->name}}</small>
    <small>created at: {{$post->created_at}}</small>
    <small>updated at: {{$post->updated_at}}</small>
    <hr>
    @auth
    <div class="row">
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

        <form method="POST" action="{{ action('PostsController@destroy',  [$post->id]) }}">
            <input type="hidden" name="_method" value="DELETE">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    @endauth
@endsection