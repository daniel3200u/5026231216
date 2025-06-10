@extends('template')

@section('content')
	<h3>Data Bolpen</h3>

	<a href="/CROT" class='btn btn-info'> Kembali</a>

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
	<form action="/CROT/store" method="post" class='form-horizontal'>
		{{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="id1">
                MERK BOLPEN
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                   type="text"
                   id="merkbolpen"
                   placeholder="Masukkan Merk Bolpen" name="merkbolpen" required="required">
            </div>
        </div>
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="id1">
                Harga
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                   type="number"
                   id="hargabolpen"
                   placeholder="Masukkan harga bolpen" name="hargabolpen" required="required">
            </div>
        </div>
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="tersedia">
                Ketersediaan
            </label>
            <div class="col-sm-6">
                <select class="form-control" id="tersedia" name="tersedia" required="required">
                    <option value="">-- Pilih Status Ketersediaan --</option>
                    <option value="1">Tersedia</option> <option value="0">Tidak Tersedia</option> </select>
            </div>
        </div>
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="id1">
                Berat
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                   type="number"
                   id="berat"
                   placeholder="Masukkan Berat"  step="any"min="0"name="berat" required="required">
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
