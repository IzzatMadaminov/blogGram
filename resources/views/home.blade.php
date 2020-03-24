@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    
        <div class="col-3 p-5">
            <img src="https://pbs.twimg.com/profile_images/843990035431010305/KSyS7Xtu_400x400.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user -> username }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>121</strong> posts</div>
                <div class="pr-4"><strong>1.2k</strong> followers</div>
                <div class="pr-4"><strong>46</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">blogGram.uz</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore doloribus perferendis vero autem ducimus, voluptas rerum cum odio veniam fugit eius deleniti nihil voluptate commodi.</div>
            <div><a href="#">www.blogGram.uz</a></div>
        </div>
    </div>
    
    <!-- <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://youtu.be/amqi76aMaLI" allowfullscreen></iframe>
    </div> -->
    
    <div class="row pt-4">
        <div class="col-4">
            <img src="/img/20190227_103522.jpg" style="transform:rotate(90deg);" class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="/img/20190227_103522.jpg" style="transform:rotate(90deg);" class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="/img/20190227_103522.jpg" style="transform:rotate(90deg);" class="w-100 h-100">
        </div>
    </div>
</div>
@endsection
