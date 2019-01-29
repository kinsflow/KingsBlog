@extends('layout.nav')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Ephaphatha</title>
</head>
<body>
<div class = "container ">
    <div class="blog-post col-sm-8">
        <h1 class="blog-post-title text-primary text-left "> {{$uid->title}}  </h1>
        <p class="blog-meta"><b><i>updated last at.{{$uid->updated_at->toFormattedDateString()}}     </i></b></p>
        <h6 class="col-sm-8">   {{$uid->post}}  </h6>
    </div>
   
    <div class="form-group">
        <form class="form-group col-sm-6" method="POST" action="/{{$uid->id}}/comment">
            {{csrf_field()}}
            <textarea placeholder="Write your comment here!" name="comment" class="form-control  mt-4 "></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="col-sm-6">
        <ul class="list-group">
            @foreach($uid->comments as $comment)
                <li class="card list-group-item-success">
                    {{$comment->comments}}
                    <strong>
                        <span class="date sub-text">{{$comment->updated_at->diffForHumans()}}</span>
                    </strong>

                </li><br>
            @endforeach
        </ul>
    </div>

</div>

</body>
</html>
@endsection