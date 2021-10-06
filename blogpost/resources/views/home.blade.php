@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>{{ __('Dashboard') }}</h2></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <a class="btn btn-primary" href="/posts/create">Create A Post</a> <br><br>
                            <h3>Your Blog Posts</h3>
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th><h4>Title</h4></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                <tr>
                                    <td><h5 style="margin:5px;">{{$post->title}}</h5></td>
                                    <td ><a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="margin:5px;">Edit</a></td>
                                    <td width="30px">
                                        <form action="{{action('App\Http\Controllers\PostsController@destroy', $post->id)}}" method="POST">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input type="submit" name="delete" value="Delete" class="btn btn-danger" style="margin:5px; ">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no posts</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection