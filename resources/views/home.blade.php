@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>{{ Auth::user()->name }}'s BLOGAPP</h1>
                    <a class="btn btn-info" href="/posts/create">Create Post</a>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Last Update</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if(count($posts) > 0)
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ action('PostsController@destroy',  [$post->id]) }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                      @endforeach
                      @else
                      <tr>
                        <td>NO POST FOUND</td>
                      </tr>
                      @endif
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
