@extends('template_dashboard.home')
@section('sub-judul', 'Tambah User')
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

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Nama User</label>
    <input type="text" class="form-control" placeholder="Tulis nama user" name="name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label>Email</label>
    <input type="email" class="form-control" placeholder="Tulis email user" name="email" value="{{ $user->email }}" readonly>
    </div>
    <div class="form-group">
        <label>Peran</label>
        <select class="form-control" name="peran">
        <option value="" holder>-- Pilih Peran --</option>
        <option value="1" holder @if($user->peran == 1) selected @endif>Administrator</option>
        <option value="0" holder @if($user->peran == 0) selected @endif>Penulis</option>
        </select>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Tulis password" name="password">
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Simpan Perubahan</button>
    </div>
</form>

@endsection