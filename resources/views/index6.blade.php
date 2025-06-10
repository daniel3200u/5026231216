@extends('template')

@section('content')

    </style>
    <h3>Data Bolpen</h3>
    <p>Cari Data Bolpen :</p>
	<form action="/CROT/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari MERK .." >
		<input type="submit" value="CARI" class="btn btn-info">
	</form>

	<br/>

    <a href="/CROT/tambah" class="btn btn-primary"> + Tambah Barang Baru</a>

    <br />
    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk Bolpen</th>
            <th>Harga Bolpen</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bolpen as $p)
            <tr>
                <td>{{ $p->merkbolpen}}</td>
                <td>{{ $p->hargabolpen }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/CROT/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
                    <a href="/CROT/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $bolpen->links() }}
@endsection
