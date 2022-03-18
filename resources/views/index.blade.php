@extends('layouts.default')
@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Pencatatan Buku | Gloria Loren</h2>
                    <a href="{{ url('create') }}" class="btn btn-primary"> + Tambah Buku </a>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table table-dark table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Sinopsis</th>
                            <th>Tanggal Input</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $dataBuku)
                            <tr>
                                <td>{{ $dataBuku->id }}</td>
                                <td>{{ $dataBuku->judul }}</td>
                                <td>{{ $dataBuku->pengarang }}</td>
                                <td>{{ $dataBuku->penerbit }}</td>
                                <td>{{ $dataBuku->tahun_terbit }}</td>
                                <td>{{ $dataBuku->sinopsis }}</td>
                                <td>{{ $dataBuku->tgl_input }}</td>
                                <td>
                                    <a href="{{ url('edit/'.$dataBuku->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url('delete/'.$dataBuku->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection