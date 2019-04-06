@extends('layouts.app')
@section('content')
    <h1>POST</h1>
    @if(count($posts) > 0)
        <ul class="list-group">
            @foreach($posts as $post)
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Picture">
                </div>
                <div class="col-md-8 col-sm-8">
                    <li class="list-group-item">
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        <small>By: {{$post->user->name}}</small>
                        <small>Created at: {{$post->created_at}}</small>
                        <small>Updated at: {{$post->updated_at}}</small>
                    </li>
                </div>
            </div>
            <hr>
            @endforeach
        </ul>
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection