@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="/image/profile-pic.png" alt="">
        </div>

        <div class="col-9">
            <div>
                <h1>username-Title</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">First name - Last name</div>
            <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, doloremque perspiciatis eaque odio aliquid quo laboriosam, totam, optio enim minus ea quidem distinctio quos et atque hic numquam quasi. Iure.</div>
            <div>
                <a href="#">other link</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="/image/post-img.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="/image/post-img.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="/image/post-img.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="/image/post-img.jpg" alt="">
        </div>
    </div>
</div>
@endsection
