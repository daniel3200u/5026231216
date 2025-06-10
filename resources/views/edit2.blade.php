<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Bolpen</h3>

	<a href="/CROT"> Kembali</a>

	<br/>
	<br/>

	@foreach($bolpen as $p)
	<form action="/CROT/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		Merk Bolpen <input type="text" required="required" name="merkbolpen" value="{{ $p->merkbolpen }}"> <br/>
		harga bolpen <input type="number" required="required" name="hargabolpen" value="{{ $p->hargabolpen }}"> <br/>
		tersedia <input type="number" required="required" name="tersedia" value="{{ $p->tersedia }}"> <br/>
		berat <input type="number" required="required" name="berat" value="{{ $p->berat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
