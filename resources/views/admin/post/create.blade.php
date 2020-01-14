@extends('template_dashboard.home')
@section('sub-judul', 'Tambah Post')
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

<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" placeholder="Apa judul post ini?" name="judul">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
            <option value="" holder>--Pilih Kategori--</option>
            @foreach($category as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Konten</label>
        <textarea class="form-control" name="content" id="" cols="30" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label>Tags</label>
        <select class="select2bs4" multiple="multiple" data-placeholder="Pilih tags" style="width: 100%;" name="tags[]">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
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
        <button class="btn btn-primary">Simpan Post</button>
    </div>
</form>

@endsection