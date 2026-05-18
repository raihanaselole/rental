@extends('layouts.admin')

@section('content')


<div class="container pt-5">

    <div class="card shadow border-0">

        <div class="card-header bg-warning">
            <h4 class="mb-0">Edit Mobil</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('cars.update', $car->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Nama Mobil</label>

                    <input type="text"
                           name="name"
                           value="{{ $car->name }}"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label>Jenis Mobil</label>

                    <select name="type"
                            class="form-control">

                        <option value="Bensin"
                            {{ $car->type == 'Bensin' ? 'selected' : '' }}>
                            Bensin
                        </option>

                        <option value="Listrik"
                            {{ $car->type == 'Listrik' ? 'selected' : '' }}>
                            Listrik
                        </option>

                    </select>
                </div>

                <div class="form-group">
                    <label>Harga Umum</label>

                    <input type="number"
                           name="price"
                           value="{{ $car->price }}"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label>Harga per Jam</label>

                    <input type="number"
                           name="price_hour"
                           value="{{ $car->price_hour }}"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label>Harga per Hari</label>

                    <input type="number"
                           name="price_day"
                           value="{{ $car->price_day }}"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label>Harga per Bulan</label>

                    <input type="number"
                           name="price_month"
                           value="{{ $car->price_month }}"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>

                    <textarea name="description"
                              class="form-control"
                              rows="4">{{ $car->description }}</textarea>
                </div>

                <div class="form-group">
                    <label>Gambar Baru</label>

                    <input type="file"
                           name="image"
                           class="form-control">

                    <img src="{{ asset('storage/'.$car->image) }}"
                         width="150"
                         class="mt-3 rounded shadow">
                </div>

                <button class="btn btn-warning">
                    Update Mobil
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