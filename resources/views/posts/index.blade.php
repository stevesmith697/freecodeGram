@extends('layouts.app')

@section('content')
<div class="container">
  <div class="post-list">
    @if($posts->isNotEmpty())
    @foreach($posts as $post)
    <article class="post-item">
      <a href="/profile/{{ $post->user->id }}">
        <figure>
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->caption }}" />
        </figure>
      </a>
      <div>
        <h4>{{ $post->caption }}</h4>
      </div>
    </article>
    @endforeach
    @else
    <h4>No posts available.</h4>
    @endif
  </div>

  <div class="pagination">
    {{ $posts->links() }}
  </div>
</div>
@endsection