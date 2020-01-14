@extends('template_dashboard.home')
@section('sub-judul', 'U s e r s')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<a href="{{ route('user.create') }}" class="btn btn-outline-dark btn-sm mb-3 float-right"><i class="fas fa-plus"></i> Tambah User</a>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Peran</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody class="table-sm">
        @foreach ($user as $result =>$hasil)
        <tr>
            <td class="text-center">{{ $result + $user->firstitem() }}</td>
            <td>{{ $hasil->name }}</td>
            <td>{{ $hasil->email }}</td>
            <td>
                @if($hasil->peran)
                <span class="badge badge-pill badge-info">Administrator</span>
                @else
                <span class="badge badge-pill badge-warning">Penulis</span>
                @endif
            </td>
            <td class="text-center">
                <form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('user.edit', $hasil->id) }}" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i> Edit</a>
                    <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-minus-circle"></i> Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-3">
    {{ $user->links() }}
</div>

@endsection