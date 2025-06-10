@extends('template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>www.malasngoding.com</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Merk Bolpen</td>
                                <td>{{ $data->merkbolpen }}</td>
                            <tr>
                                <td>harga Bolpen</td>
                                <td>{{ $data->hargabolpen }}</td>
                            </tr>
                            <tr>
                                <td>tersedia</td>
                                <td>{{ $data->tersedia }}</td>
                            </tr>
                            <tr>
                                <td>berat</td>
                                <td>{{ $data->berat }}</td>
                            </tr>
                        </table>

                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
@endsection

