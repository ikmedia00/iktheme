@extends('template_home.content')
@section('isi')

@foreach ($data as $single_post)

    <div class="head-single">
        <div class="breadcrumb">
            <li><a href="">Home</a></li>
            <li class="active">Film</li>
        </div>
        <h1> {{ $single_post->judul }}</h1>
        <div class="foot-head">
            <p><a href="">{{ $single_post->users->name }}</a></p>
            <p><a>{{ $single_post->category->name }}</a></p>
            <p>{{ $single_post->created_at }}</p>
        </div>
    </div>

    <div class="img-single">
        <img src="{{ asset($single_post->gambar) }}" alt="" class="img-fluid">
    </div>
    {{ $single_post->content }}
@endforeach

@endsection