@extends('mahasiswas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>

<form class="form" method="get" action="{{ route('search') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Email</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>No_Handphone</th>
        <th>TanggalLahir</th>
        <th width="270px">Action</th>
    </tr>
    @foreach ($mahasiswa as $Mahasiswa)
    <tr>

        <td>{{ $Mahasiswa->Nim }}</td>
        <td>{{ $Mahasiswa->Nama }}</td>
        <td><img width="100px" height="100px" src="{{ asset('storage/' . $Mahasiswa->foto) }}"></td>
        <td>{{ $Mahasiswa->Email }}</td>
        <td>{{ $Mahasiswa->kelas->nama_kelas }}</td>
        <td>{{ $Mahasiswa->Jurusan }}</td>
        <td>{{ $Mahasiswa->No_Handphone }}</td>
        <td>{{ $Mahasiswa->TanggalLahir }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy',$Mahasiswa->Nim) }}" method="POST">

                <a class="btn btn-info" href="{{ route('mahasiswa.show',$Mahasiswa->Nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$Mahasiswa->Nim) }}">Edit</a>
                <a class="btn btn-warning" href="{{route('nilai',$Mahasiswa->Nim) }}"> Nilai</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
            Halaman : {{ $mahasiswa->currentPage() }} <br/>
            Jumlah Data : {{ $mahasiswa->total() }} <br/>
            Data Per Halaman : {{ $mahasiswa->perPage() }} <br/>
            <br>
            {{ $mahasiswa->links() }}
@endsection