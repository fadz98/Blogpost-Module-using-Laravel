@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Posts</h1>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                <div class="card bg-light">
                    <div class="card-body">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p>No Posts Found</p>
            @endif
        </div>
    </div>
</section>
@endsection
