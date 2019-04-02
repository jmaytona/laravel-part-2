@extends('layouts.app')
@section('content')
    <h1>POST</h1>
    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
            <li><a href="/posts/{{$post->id}}">{{$post->title}}</a></li>
            <small>Created at: {{$post->created_at}}</small>
            @endforeach
        </ul>
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection