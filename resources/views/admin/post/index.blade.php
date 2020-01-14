@extends('template_dashboard.home')
@section('sub-judul', 'P o s t')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<a href="{{ route('post.create') }}" class="btn btn-outline-dark btn-sm mb-3 float-right"><i class="fas fa-plus"></i> Tambah Post</a>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Judul Post</th>
            <th class="text-center">Author</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Tags</th>
            <th class="text-center">Gambar</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody class="table-sm">
        @foreach ($post as $result =>$hasil)
        <tr>
            <td class="text-center">{{ $result + $post->firstitem() }}</td>
            <td>{{ $hasil->judul }}</td>
            <td>{{ $hasil->users->name }}</td>
            <td>{{ $hasil->category->name }}</td>
            <td>@foreach($hasil->tags as $tag)
                <ul class="list-unstyled mb-0">
                    <span class="badge badge-pill badge-info">{{ $tag->name }}</span>
                </ul>
                @endforeach
            </td>
            <td class="text-center" style="max-width:85px;"><img src="{{ asset($hasil->gambar) }}" alt="" class="img-fluid" style="width: 100px; height: 60px; object-fit: cover"></td>
            <td class="text-center">
                <form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i> Edit</a>
                    <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-restore-alt"></i> Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-3">
    {{ $post->links() }}
</div>

@endsection