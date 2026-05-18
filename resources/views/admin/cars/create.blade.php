@extends('layouts.admin')

@section('content')

<div class="container pt-5 mt-5">

    <div class="card shadow border-0 rounded-lg">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0 text-white">Tambah Mobil</h4>
        </div>

        <div class="card-body">

            {{-- ERROR VALIDATION --}}
            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{ route('cars.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                {{-- NAMA --}}
                <div class="form-group mb-3">

                    <label><b>Nama Mobil</b></label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Contoh: Toyota Avanza"
                           required>

                </div>

                {{-- JENIS --}}
                <div class="form-group mb-3">

                    <label><b>Jenis Mobil</b></label>

                    <select name="type"
                            class="form-control"
                            required>

                        <option value="">-- Pilih Jenis --</option>
                        <option value="Bensin">Bensin</option>
                        <option value="Listrik">Listrik</option>

                    </select>

                </div>

                {{-- HARGA UMUM --}}
                <div class="form-group mb-3">

                    <label><b>Harga Umum</b></label>

                    <input type="number"
                           name="price"
                           class="form-control"
                           placeholder="Contoh: 350000"
                           required>

                </div>

                {{-- HARGA PER JAM --}}
                <div class="form-group mb-3">

                    <label><b>Harga per Jam</b></label>

                    <input type="number"
                           name="price_hour"
                           class="form-control"
                           placeholder="Contoh: 50000"
                           required>

                </div>

                {{-- HARGA PER HARI --}}
                <div class="form-group mb-3">

                    <label><b>Harga per Hari</b></label>

                    <input type="number"
                           name="price_day"
                           class="form-control"
                           placeholder="Contoh: 350000"
                           required>

                </div>

                {{-- HARGA PER BULAN --}}
                <div class="form-group mb-3">

                    <label><b>Harga per Bulan</b></label>

                    <input type="number"
                           name="price_month"
                           class="form-control"
                           placeholder="Contoh: 8000000"
                           required>

                </div>

                {{-- DESKRIPSI --}}
                <div class="form-group mb-3">

                    <label><b>Deskripsi Mobil</b></label>

                    <textarea name="description"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan deskripsi mobil"></textarea>

                </div>

                {{-- GAMBAR --}}
                <div class="form-group mb-4">

                    <label><b>Gambar Mobil</b></label>

                    <input type="file"
                           name="image"
                           class="form-control"
                           required>

                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="btn btn-success">

                    Simpan Mobil

                </button>

                <a href="/admin/cars"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

@endsection