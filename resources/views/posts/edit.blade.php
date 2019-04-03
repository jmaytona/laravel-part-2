@extends('layouts.app')
@section('content')
    <h1>EDIT POST</h1>
    <form method="POST" action="{{ action('PostsController@update',  [$post->id]) }}">
        {{-- Hidden method PUT for update --}}
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title:</label>
        <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" name="body" id="body" rows="4">{{$post->body}}</textarea>
        </div>
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    
@endsection