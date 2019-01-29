@extends('layout.nav')

@section('content')
<div class="container  mt-sm-4">
    <div class="page-header">
        <h1>Kings Blog</h1>
    </div>

    <p>quality blog that enhances communication</p>
    <hr>
    <h3>Trending Posts</h3>
    <hr>
    <div class="forms " >
        <div class="row">
            <div class="col-sm-8">

                @foreach($posts as $post)
                  @if (count($posts) >= 1)
                    <div class="blog-post">
                        <h3 class="blog-post-title text-primary"><a href="/{{$post->id}}">{{$post->title}}</a></h3>
                        <i>post by <strong class="text-success">{{$post->name}}</strong></i>
                        <p class="blog-meta">updated last at. <b>{{ date('d-M-y', strtotime($post->updated_at)) }}</b></p>
                        <h6>{{$post->post}}</h6>
                        <p><a href="/{{$post->id}}"><sup>got a comment?</sup></a></p>
                    </div>

                @else
                    return 'okay';
                @endif
                @endforeach

            </div>
            <div class="col-sm-4 " >
                <h2>You Can Register Here</h2>
                <form method = 'POST' action="/home">
                    {{ csrf_field() }}
                    <div class="form-group col-12">
                        <label for="username">User Name:</label>
                        <input type="name" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">

                            <input class="form-check-input" type="checkbox">   {{ __('Remember Me') }}
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>


    </div>
</div>

</body>
</html>
@endsection