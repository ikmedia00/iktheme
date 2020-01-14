@extends('template_dashboard.home')
@section('sub-judul', 'Edit Post')
@section('content')

@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" placeholder="judul post" name="judul" value="{{ $post->judul }}">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
            <option value="" holder>--Pilih Kategori--</option>
            @foreach($category as $result)
            <option value="{{ $result->id }}" @if($post->category_id == $result->id)
                selected
                @endif
                >{{ $result->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Konten</label>
        <textarea class="form-control" name="content" id="" cols="30" rows="5">{{ $post->content }}</textarea>
    </div>

    <div class="form-group">
        <label>Tags</label>
        <select class="select2bs4" multiple="multiple" data-placeholder="Pilih tags" style="width: 100%;" name="tags[]">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}" @foreach($post->tags as $value)
                @if($tag->id == $value->id)
                selected
                @endif
                @endforeach
                >{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Gambar</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="gambar">
            <label class="custom-file-label" for="customFile">Pilih gambar</label>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Simpan Perubahan</button>
    </div>
</form>

@endsection