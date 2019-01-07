@extends('layouts.template')
@include('inc.nav')
@section('title', 'News Admin Panel')

@section('content')
   <h1>Admin Panel</h1>
   <a href="{{route('blog.create')}}" class="btn btn-primary pull-right">Add News Article</a>
   <br>
   <br>
   <br>
   <table class="table">
       <thead>
           <th>id</th>
           <th>title</th>
           <th>body</th>
           <th>edit</th>
           <th>delete</th>
       </thead>
       <tbody>
            @foreach ($posts as $post)
                <tr>
                <th>{{ $post->id}}</th>
                <td>{{ $post->title}}</td>
                <td>{{ $post->body}}</td>
                <td><a href="{{route('blog.edit',['id'=>$post->id]) }}" class="btn btn-info">Edit</a></td>
                <td>
                <form action="{{route('blog.destroy', ['id'=>$post->id])}}" method="Post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </td>
                </tr>
            @endforeach
       </tbody>
   </table>
@endsection