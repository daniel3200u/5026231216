@extends('template')

@section('content')

    </style>
    <h3>Data Karyawan</h3>
    <p>Cari Data Karyawan :</p>
	<form action="/index/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari karyawan .." >
		<input type="submit" value="CARI" class="btn btn-info">
	</form>

	<br/>




    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai}}</td>
                <td>{{ Str::upper($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ Str::lower($p->departemen) }}</td>
                <td>
                    <a href="/index/edit/{{ $p->kodepegawai }}" class="btn btn-success">Edit</a>
                    <a href="/index/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/index/tambah" class="btn btn-primary"> + Tambah karyawan</a>
    {{ $karyawan->links() }}
@endsection
