@extends('layout.nav')
@section('content')
    <div class="container mt-sm-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-header ml-sm-9">
                    <h2>My Posts</h2>
                   <p>welcome! {{auth()->user()->name}}</p>
                </div>
                @foreach($posts as $post)
                <div class="blog-post ">
                    <h1 class="blog-post-title text-primary">{{$post->title}}</h1>
                    <i>post by <strong class="text-success">{{auth()->user()->name}}</strong></i>
                    <p class="blog-meta">updated last at. {{ $post->updated_at->toFormattedDateString() }}</p>
                    <h6>{{$post->post}}</h6>
                </div>
                @endforeach
            </div>
            <div class="col-sm-5">
                <form method="post" action="/insert">
                    {{csrf_field()}}
                    <div>
                        <h1>Create A New Post</h1>
                    </div>
                    <div class="form-group">
                        <label for="title">Post Title:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="post">Post Body:</label>
                        <textarea class="form-control" name="post" id="post"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary col-sm-6">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection