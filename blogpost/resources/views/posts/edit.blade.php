@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Post</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{action('App\Http\Controllers\PostsController@update', $post->id)}}">
                    @csrf
                    <div class="form-group"><label for="title" class=" form-control-label">
                            <h4>Title</h4>
                        </label><input type="text" value="{{$post->title}}" name="title" id="title" class="form-control"></div>
                    <br>
                    <div class="form-group"><label for="body" class=" form-control-label">
                            <h4>Body</h4>
                        </label><textarea id="body" name="body" class="ckeditor form-control">{{$post->body}}</textarea></div>
                    <br>
                    <div class="form-actions form-group">
                        <input name="_method" type="hidden" value="PUT">
                        <input type="submit" name="submit" value="Submit" class=" btn btn-primary">
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
