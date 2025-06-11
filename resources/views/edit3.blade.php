@extends('template')

@section('content')

    </style>
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Bolpen</h3>

	<a href="/index"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $p)
	<form action="/index/update" method="post" class="form-horizontal">
        {{ csrf_field() }}
        @method('PATCH') <div class="form-group">
            <label class="control-label col-sm-2" for="kodepegawai">
                Kode Karyawan
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="kodepegawai"
                    name="kodepegawai"
                    value="{{ $p->kodepegawai }}"
                    readonly> </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="namalengkap">
                Nama Lengkap
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="namalengkap"
                    name="namalengkap"
                    value="{{ $p->namalengkap }}"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text"
                    id="divisi"
                    name="divisi"
                    value="{{ $p->divisi }}"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text" id="departemen"
                    name="departemen"
                    value="{{ $p->departemen }}"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <input type="submit" value="Simpan Perubahan" class="btn btn-primary">
                <a href="/index" class="btn btn-default">Batal</a> </div>
        </div>
    </form>
	@endforeach

@endsection
