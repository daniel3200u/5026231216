<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
    <br>
    <p>Nama : {{$nama}}</p>
    <p>Usia : {{$umur}}</p>
    <p>Alamat : {{$alamat}}</p>
    <ul>
        @foreach ($pelajaran as $m)
            <li>{{$m}}</li>
        @endforeach
    </ul>
    {{-- <p>Pelajaran : {{$pelajaran}}</p> --}}
</body>
</html>
