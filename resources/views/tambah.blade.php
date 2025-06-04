@extends('template')

@section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class='btn btn-info'> Kembali</a>

	<br/>
	<br/>
    @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
    @endif
	<form action="/pegawai/store" method="post" class='form-horizontal'>
		{{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="id1">
                Nama
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                   type="text"
                   id="nama"
                   placeholder="Masukkan Nama Lengkap" name="nama" required="required">
            </div>
        </div>
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="id1">
                Jabatan
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                   type="text"
                   id="jabatan"
                   placeholder="Masukkan Nama Lengkap" name="jabatan" required="required">
            </div>
        </div>
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="id1">
                Umur
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                   type="number"
                   id="umur"
                   placeholder="Masukkan Nama Lengkap"  name="umur" required="required">
            </div>
        </div>
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="id1">
                alamat
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                   type="number"
                   id="alamat"
                   placeholder="Masukkan Nama Lengkap"  name="alamat" required="required">
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
