@extends('template')

@section('content')
	<h3>Data nilai</h3>

	<a href="/eas" class='btn btn-info'> Kembali</a>

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
	<form action="/eas/store" method="post" class='form-horizontal'>
    {{ csrf_field() }}

        <div class="form-group row">
            <label class="control-label col-sm-2" for="kodepegawai">
                NRP
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="nomorinduksiswa"
                    placeholder="Masukkan nomor induk siswa" name="nomorinduksiswa" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="namalengkap">
                Nilai Angka
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="number"
                    id="nilaiangka"
                    placeholder="Masukkan Nilai" name="nilaiangka" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="divisi">
                SKS
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="number"
                    id="sks"
                    placeholder="Masukkan Divisi" name="sks" required="required">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6"> <input type="submit" value="Simpan Data" class="btn btn-primary"> </div>
        </div>
    </form>
@endsection
