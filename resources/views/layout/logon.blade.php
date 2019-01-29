@extends('layout.nav')
@section('content')
    <div class="container mt-sm-4">
        <div class="page-header">
            <h1>Kings Blog</h1>
        </div>
        <form method = 'POST' action="/auth">
            {{ csrf_field() }}
            @if($errors->any())
                {{ dd($errors->all()) }}
            @endif
            {{--<span>{{ $error->has('email') }}</span>--}}
            <div class="form-group col-5">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group col-5">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection