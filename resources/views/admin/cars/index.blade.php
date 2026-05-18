@extends('layouts.admin')

@section('content')


<div class="container pt-5 mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Data Mobil</h3>

        <a href="/admin/cars/create"
           class="btn btn-success">
           Tambah Mobil
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover text-center align-middle">

                    <thead class="thead-dark">
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Mobil</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($cars as $car)

                        <tr>

                            <td>
                                <img src="{{ asset('storage/'.$car->image) }}"
                                     width="140"
                                     class="rounded shadow-sm">
                            </td>

                            <td>
                                <b>{{ $car->name }}</b>
                            </td>

                            <td>

                                @if($car->type == 'Listrik')

                                    <span class="badge badge-success px-3 py-2">
                                        Mobil Listrik
                                    </span>

                                @else

                                    <span class="badge badge-secondary px-3 py-2">
                                        Mobil Bensin
                                    </span>

                                @endif

                            </td>

                            <td>
                                <b>Rp {{ number_format($car->price,0,',','.') }}</b>
                            </td>

                            <td>
                                <a href="{{ route('cars.show', $car->id) }}"
                                    class="btn btn-info btn-sm">
                                    Detail
                                </a>

                                <a href="/admin/cars/{{ $car->id }}/edit"
                                   class="btn btn-warning btn-sm">
                                   Edit
                                </a>

                                <form action="/admin/cars/{{ $car->id }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus mobil ini?')">
                                            Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="5">
                                Belum ada data mobil
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>


@endsection