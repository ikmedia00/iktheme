@extends('template_dashboard.home')
@section('sub-judul', 'T a g s')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<a href="{{ route('tag.create') }}" class="btn btn-outline-dark btn-sm mb-3 float-right"><i class="fas fa-plus"></i> Tambah Tags</a>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tag</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="table-sm">
        @foreach ($tag as $result =>$hasil)
        <tr>
            <td>{{ $result + $tag->firstitem() }}</td>
            <td>{{ $hasil->name }}</td>
            <td>
                <form action="{{ route('tag.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('tag.edit', $hasil->id) }}" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i> Edit</a>
                    <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-minus-circle"></i> Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-3">
    {{ $tag->links() }}
</div>

@endsection