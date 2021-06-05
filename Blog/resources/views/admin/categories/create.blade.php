@extends('layouts.app')

@section('content')
@include('admin.includes.errors')


    <div class="card card-default">
        <div class="card-header bg-success">
            <h1 class="text-center text-light">Create A New Category</h1>
        </div>
        <div class="card-body">
            <form action="{{route('category.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Name</label>
                    <input type="text" name="category_name" class="form-control">
                </div>
          
                <div class="form-group">
                    <div class="text-center">
                        <button name="submit" type="submit" class="btn btn-success btn-lg">Store Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
