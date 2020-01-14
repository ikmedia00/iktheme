@extends('template_dashboard.home')
@section('sub-judul', 'Trash Post')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Post</th>
            <th>Kategori</th>
            <th>Tags</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="table-sm">
        @foreach ($post as $result =>$hasil)
        <tr>
            <td>{{ $result + $post->firstitem() }}</td>
            <td>{{ $hasil->judul }}</td>
            <td>{{ $hasil->category->name }}</td>
            <td>@foreach($hasil->tags as $tag)
                <ul class="list-unstyled mb-0">
                    <li class="badge badge-pill badge-info">{{ $tag->name }}</li>
                </ul>
                @endforeach
            </td>
            <td><img src="{{ asset($hasil->gambar) }}" alt="" class="img-fluid" style="width: 100px; height: 60px; object-fit: cover"></td>
            <td>
                <form action="{{ route('post.kill', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.restore', $hasil->id) }}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i> Restore</a>
                    <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-minus-circle"></i> Hapus</button>
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