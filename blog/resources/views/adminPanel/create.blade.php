@extends('layouts.template')

@include('inc.nav')
@section('title', 'Add New Post')
@section('content')
    <h1>Add New Article</h1>
    <div class="col-sm-8 col-smoffset-2">
        <form action="{{route('blog.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control">
            </div>
            <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id=''cols="30" rows="10" type="text" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('blog.index')}}" class="btn btn-default pull-right">Go Back</a>
        </form>
    </div>

@endsection

