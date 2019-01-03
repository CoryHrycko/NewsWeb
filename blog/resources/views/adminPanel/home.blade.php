@extends('layouts.template')

@section('title', 'News Admin Panel')

@section('content')
   <h1>Admin Panel</h1>
   {{-- <a href="{{route('blogs.create')}}" class="btn btn-primary pull-right">Add New news Article</a> --}}
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
           <th>sample post id</th>
           <td>post title sample</td>
           <td>content</td>
           <td>edit button</td>
           <td>delete button</td>
       </tbody>
   </table>
@endsection