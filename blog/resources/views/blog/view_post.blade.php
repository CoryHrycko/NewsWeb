@extends('layouts.viewposttemp')

@section('title'. 'View Post #'.$id)

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        {{--  comments --}}
        @foreach ($post->comments as $comment)
            <div class="comment">
                <p><strong> Name: </strong>{{$comment->name}}</p>
                <p><strong>Comment:</strong> <br>{{$comment->comment}}</p>
                <br>
            </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div id="comment-form" class="col-md-8 col-offset-2" style="margin-top:50px;">
        {{Form::open(['route'=>['comments.store', $post->id], 'method'=>'POST']) }}
            <div class="row">
                <div class="col-md-6">
                    {{Form::label('name', "Name:")}}
                    {{Form::text('name', null, ['class' =>'form-control' ]) }}
                </div>
                <div class="col-md-6">
                    {{Form::label('email', 'Email:') }}
                    {{Form:: text('email',null, ['class'=>'form-control'])}}
                </div>
                <div class="col-md-12">
                    {{Form::label('comment', "Comment:") }}
                    {{Form::textarea('comment',null,['class'=>'form-control', 'rows' => '5']) }}

                    {{Form::submit('Add Comment',['class'=>'btn btn-success btn-block'])}}
                </div>
            </div>
        
        {{Form::close()}}
    </div>
</div>

@endsection