@extends('layouts.app')
@section('content')
    <h1>POST</h1>
    @if(count($posts) > 0)
        <ul class="list-group">
            @foreach($posts as $post)
            <li class="list-group-item">
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                <small>By: {{$post->user->name}}</small>
                <small>Created at: {{$post->created_at}}</small>
                <small>Updated at: {{$post->updated_at}}</small>
            </li>
            @endforeach
        </ul>
        <hr>
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection