@extends('template')

@section('content')

    </style>
    <h3>Data Pegawai</h3>
    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." >
		<input type="submit" value="CARI" class="btn btn-info">
	</form>

	<br/>

    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

    <br />
    <br />

    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}
@endsection
