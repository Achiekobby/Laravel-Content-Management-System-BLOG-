@extends('layouts.app')

@section('content')

    @if (count($errors)>0)
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif


    <div class="card card-default">
        <div class="card-header bg-primary">
            <h1 class="text-center text-light">Create A New Post</h1>
        </div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title" class="font-weight-bold">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured" class="font-weight-bold">Post Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Post Content" class="font-weight-bold">Post Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-left">
                        <button name="submit" type="submit" class="btn btn-primary btn-lg">Store Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
