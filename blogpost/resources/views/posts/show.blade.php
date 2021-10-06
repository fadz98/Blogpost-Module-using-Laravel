@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <a href="/posts"><button type="button" class="btn btn-outline-primary">Go Back</button></a><br><br>
        <div class="row justify-content-center">
            <h1>{{$post->title}}</h1>
        </div>
        <h4>{!!$post->body!!}</h4>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
            <div class="btn-group" style="padding: 10px 24px; float: right; ">
                <a href="/posts/{{$post->id}}/edit"><button type="button" class="btn btn-primary" style="margin:5px;">Edit</button></a>

                <form action="{{action('App\Http\Controllers\PostsController@destroy', $post->id)}}" method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger" style="margin:5px;">
                </form>
            </div><br><br>
            @endif
        @endif
        <br>
        <div class="card">
            <div class="card-header">
                <h5>Leave a comment</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('comment.add') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="comment" class="form-control" />
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    </div><br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary" value="Add Comment" />
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h5>Display Comments</h5>
            </div>
            <div class="card-body">
                @include('posts.partials.replies', ['comments' => $post->comments, 'post_id' => $post->id])
            </div>
        </div>
    </div>
</section>
@endsection