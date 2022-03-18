@extends('layouts.default')
@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Data Buku</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="POST">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <div class="form-group mt-2">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" class="form-control">
                        </div>

                        <div class="form-group mt-2">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control">
                        </div>

                        <div class="form-group mt-2">
                            <label for="tahun_terbit">Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" class="form-control">
                        </div>
                        
                        <div class="form-group mt-2">
                            <label for="sinopsis">Sinopsis</label>
                            <textarea class="form-control "name="sinopsis"></textarea>
                        </div>

                        <div class="form-group mt-2">
                            <label for="tgl_input">Tanggal Input</label>
                            <input type="date" name="tgl_input" class="form-control">
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Tambah Buku</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}"> <-- Kembali ke halaman utama </a>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>

    </section>

@endsection