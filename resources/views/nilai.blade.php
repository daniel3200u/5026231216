@extends('template')
@section('content')

    </style>
    <h3>Data Nilai</h3>

	<br/>

    <a href="/eas/tambah" class="btn btn-primary"> + Tambah Nilai Baru</a>

    <br />
    <br />

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nomorinduksiswa }}</td>
                <td>{{ $p->nilaiangka }}</td>
                <td>{{ $p->sks }}</td>
                <td>
                 @if ($p->nilaiangka >= 81)
                    A
                @elseif ($p->nilaiangka >= 61 & $p->nilaiangka <= 80)
                    B
                @elseif ($p->nilaiangka >= 41 & $p->nilaiangka <= 60)
                    C
                @elseif ($p->nilaiangka <= 40)
                    D
                @endif
                </td>
                <td>{{ number_format($p->nilaiangka * $p->sks, 0, ',', '.')}}</td>
            </tr>
        @endforeach
    </table>
@endsection
