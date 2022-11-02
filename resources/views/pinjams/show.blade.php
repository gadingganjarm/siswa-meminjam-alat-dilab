@extends('pinjams.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show pinjam</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('pinjams.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto Siswa:</strong>
                {{ $pinjam->image }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $pinjam->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas:</strong>
                {{ $pinjam->kelas }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alat:</strong>
                {{ $pinjam->alat }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"> 
                <strong>Peminjaman:</strong>
                {{ $pinjam->peminjaman }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengembalian:</strong>
                {{ $pinjam->pengembalian }}
            </div>
        </div>
    </div>
@endsection