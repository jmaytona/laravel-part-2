@extends('layouts.app')
@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>created at: {{$post->created_at}}</small>
@endsection