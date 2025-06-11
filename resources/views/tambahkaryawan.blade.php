@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<a href="/index" class='btn btn-info'> Kembali</a>

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
	<form action="/index/store" method="post" class='form-horizontal'>
    {{ csrf_field() }}

        <div class="form-group row">
            <label class="control-label col-sm-2" for="kodepegawai">
                Kode Pegawai
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="kodepegawai"
                    placeholder="Masukkan kode pegawai" name="kodepegawai" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="namalengkap">
                Nama Lengkap
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="namalengkap"
                    placeholder="Masukkan Nama Lengkap" name="namalengkap" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="divisi"
                    placeholder="Masukkan Divisi" name="divisi" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text" id="departemen"
                    placeholder="Masukkan Departemen" name="departemen" required="required">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6"> <input type="submit" value="Simpan Data" class="btn btn-primary"> </div>
        </div>
    </form>
@endsection
