@extends('pinjams.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
            <div>
            <a class="btn btn-primary" href="http://localhost:8000"> Back</a>
        </div>
                <h2>Data Siswa Peminjam Alat</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('pinjams.create') }}"> Tambah Data </a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Foto Siswa</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alat</th>
            <th>Peminjaman</th>
            <th>Pengembalian</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pinjams as $pinjam)
        <tr>
            <td>{{ ++$i }}</td>
            <td>
                <img src="{{ Storage::url('public/pinjam/').$pinjam->image }}" class="rounded" style="width: 150px" alt="">
            </td>
            <td>{{ $pinjam->nama }}</td>
            <td>{{ $pinjam->kelas }}</td>
            <td>{{ $pinjam->alat }}</td>
            <td>{{ $pinjam->peminjaman }}</td>
            <td>{{ $pinjam->pengembalian }}</td>
            <td>
                <form action="{{ route('pinjams.destroy',$pinjam->id) }}" method="POST">
   
                  <a class="btn btn-info" href="{{ route('pinjams.show',$pinjam->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pinjams.edit',$pinjam->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $pinjams->links() !!}
    </div>
      
@endsection