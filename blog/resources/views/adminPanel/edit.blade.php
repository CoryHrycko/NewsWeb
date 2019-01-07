@extends('layouts.template')

@include('inc.nav')
@section('title', 'Edit Article: #'.$post->id)
@section('content')
<h1>Edit Article #{{ $post->id }}</h1>
    <div class="col-sm-8 col-smoffset-2">
        <form action="{{route('blog.update',['id'=>$post->id])}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                
                <label for="title">Title</label>
            <input name="title" type="text" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                    <label for="body">Body</label>
            <textarea name="body" id=''cols="30" rows="10" type="text" class="form-control">{{ $post->body }}</textarea>
            </div>

            <input type="hidden" name="editForm" value="">

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('blog.index')}}" class="btn btn-default pull-right">Go Back</a>
        </form>
    </div>

@endsection