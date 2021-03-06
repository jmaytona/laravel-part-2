@extends('layouts.app')
@section('content')
    <h1>CREATE POST</h1>
    <form method="POST" action="{{ action('PostsController@store') }}" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" name="body" id="body" rows="4"></textarea>
        </div>
        <label for="upload">Upload Image:</label>
        <br>
        <input type="file" name="cover_image">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection