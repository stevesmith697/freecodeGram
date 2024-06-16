@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <figure class="col-3 p-3">
            <img src="{{ $user->profile->profileImage() }}" alt="profile-image" class="rounded-circle profile-img">
        </figure>
        <div class="col-9 profile-info">
            <div class="d-flex justify-content-between align-items-baseline pb-3">
                <div class="profile-title d-flex align-items-center">
                    <h4 class="font-semibold">
                        {{ $user->username }}
                    </h4>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                @can('update',$user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update',$user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="profile-stats">
                <div><strong>{{ $postCount }}</strong> posts</div>
                <div><strong>{{ $followersCount }}</strong> followers</div>
                <div><strong>{{ $followingCount }}</strong> following</div>
            </div>
            @if(!empty($user->profile->title))
            <h5 class="pt-3">{{ $user->profile->title }}</h5>
            @endif

            @if(!empty($user->profile->description))
            <p>{{ $user->profile->description }}</p>
            @endif

            @if(!empty($user->profile->url))
            <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
            @endif
        </div>
    </div>
    <div class="row pt-5">
        <div class="row post-grid">
            @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image}}" alt="post-img" class="w-100">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection