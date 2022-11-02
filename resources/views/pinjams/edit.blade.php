@extends('pinjams.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit pinjam</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('pinjams.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('pinjams.update',$pinjam->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto Siswa:</strong>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Kelas" value="{{ $pinjam->image }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="nama" value="{{ $pinjam->nama }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas:</strong>
                <input type="text" name="kelas" value="{{ $pinjam->kelas }}" class="form-control" placeholder="Kelas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alat Yang DiPinjam:</strong>
                <input type="text" name="alat" value="{{ $pinjam->alat }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Peminjaman:</strong>
                <input type="date" name="peminjaman" value="{{ $pinjam->peminjaman }}"  class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengembalian:</strong>
                <input type="date" name="pengembalian" value="{{ $pinjam->pengembalian }}" class="form-control">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection