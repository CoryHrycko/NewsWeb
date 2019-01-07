        @extends('layouts.homePageTemp')

{{-- Container for top ten posts --}}

{{-- Yielding for new posts --}}
    @section('title','News Home Page')
    @section('content')
        
    @foreach ($posts as $post)
        <div class="card card-lg" style="padding:2rem;margin:1rem;">
            <h3> <u> {{ $post->title }}</u></h3>
            <p>{{ $post->body }}</p>
        <a href="{{ route('blog.show',['if'=>$post->id]) }}" class="btn btn-default pull-right">View Post</a>
        </div>
    @endforeach
    <div class="row center" style="margin:1rem;">
        {{$posts->links()}}
    </div>
    @endsection
{{-- done yielding for new posts --}}
{{-- dummy posts --}}
