@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-post">
        <div class="row">
            <div class="col-7">
                <img src="/storage/{{ $post->image }}" alt="post-img">
            </div>
            <div class="col-5">
                <figure><img class="profile-img" src="/storage/{{ $post->user->profile->image }}" alt="profile-img"></figure>
                <h2>{{ $post->caption }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection
