@foreach($comments as $comment)
<div class="display-comment">
    <strong>{{ $comment->user->name }} - </strong><small> {{ $comment->created_at->format('d/m/Y, h:m:s') }}</small>
    <p>{{ $comment->comment }}</p>
    
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment" class="form-control" />
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div><br>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-primary" value="Reply" />
        </div><br>
    </form>
    @include('posts.partials.replies', ['comments' => $comment->replies])
</div>
@endforeach 