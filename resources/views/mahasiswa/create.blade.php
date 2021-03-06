@extends('mahasiswas.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
        <div class="card-header">Tambah Mahasiswa</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
    @csrf
        <div class="form-group">
            <label for="nim">Nim</label>
            <input type="text" name="nim" class="form-control" id="nim" aria-describedby="nim" >
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="name" name="name" class="form-control" id="name" aria-describedby="name" >
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="kelas" name="kelas" class="form-control" id="kelas" aria-describedby="password" >
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="jurusan" name="jurusan" class="form-control" id="jurusan" aria-describedby="jurusan" >
        </div>
        <div class="form-group">
            <label for="no_handphone">No_Handphone</label>
            <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone" aria-describedby="no_handphone" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="form-group">
        <label for ="kelas">kelas</label>
        <select class="form-control">
        @foreach($kelas as $kls)
        <option value="{{$kls->nama_id}}">{{$kls->nama_kelas}}</option>
        @endforeach
        </select>
        </div>
    </form>
    </div>
    </div>
    </div>
</div>
@endsection