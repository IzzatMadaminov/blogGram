@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    
        <div class="col-3 p-5">
            <img src="/storage/{{ $user->profile->image }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user -> username }}</h1>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan           
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>1.2k</strong> followers</div>
                <div class="pr-4"><strong>46</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    
    <!-- <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://youtu.be/amqi76aMaLI" allowfullscreen></iframe>
    </div> -->
    
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
