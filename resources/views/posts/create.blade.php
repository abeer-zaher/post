@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="header"><h1>Create post</h1></div>
                <div class="body">
                    <form action="{{route('posts.store')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                        <div class="form-group">
                            <label for="exampleInputEmail">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Description</label>
                            <textarea type="text" class="form-control" name="description" required>
                                </textarea>
                        </div>
 
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection