@extends('layouts.app')

@section('title','Booking')

@section('content')


<div class="container pt-5 mt-5">

    <div class="row">

        {{-- FORM --}}
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h4 class="mb-4">Form Booking</h4>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Nama --}}
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" class="form-control mb-3" placeholder="Masukkan nama lengkap">

                    {{-- Umur --}}
                    <label>Umur</label>
                    <input type="number" name="age" class="form-control mb-3" placeholder="Contoh: 21">

                    {{-- No HP --}}
                    <label>No Handphone</label>
                    <input type="text" name="phone" class="form-control mb-3" placeholder="08xxxxxxxxxx">

                    {{-- Jenis Mobil --}}
                    <label>Jenis Mobil</label>
                    <select name="car_type" class="form-control mb-3">
                        <option value="">-- Pilih Jenis --</option>
                        <option value="Bensin">Bensin</option>
                        <option value="Listrik">Listrik</option>
                    </select>

                    {{-- Tipe Mobil --}}
                    <label>Tipe Mobil</label>
                    <select name="car_name" class="form-control mb-3">
                        <option>-- Pilih Mobil --</option>

                        {{-- BENSIN --}}
                        <optgroup label="Mobil Bensin">
                            <option>Toyota Avanza</option>
                            <option>Daihatsu Xenia</option>
                            <option>Honda Brio</option>
                            <option>Toyota Rush</option>
                            <option>Mitsubishi Xpander</option>
                            <option>Suzuki Ertiga</option>
                            <option>Toyota Innova</option>
                            <option>Honda Mobilio</option>
                            <option>Nissan Livina</option>
                            <option>Toyota Fortuner</option>
                        </optgroup>

                        {{-- LISTRIK --}}
                        <optgroup label="Mobil Listrik">
                            <option>Hyundai Ioniq 5</option>
                            <option>Wuling Air EV</option>
                            <option>Tesla Model 3</option>
                        </optgroup>
                    </select>

                    {{-- Tanggal --}}
                    <label>Tanggal Booking</label>
                    <input type="date" name="booking_date" class="form-control mb-3">

                    <label>Tanggal Pemesanan</label>
                    <input type="date" name="order_date" class="form-control mb-3">

                    {{-- Upload --}}
                    <label>Upload Bukti DP</label>
                    <input type="file" name="dp_proof" class="form-control mb-4">

                    <button class="btn btn-primary w-100">Booking Sekarang</button>

                </form>
            </div>
        </div>

        {{-- KETERANGAN --}}
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h4 class="mb-4">Petunjuk Pengisian</h4>

                <ul>
                    <li><b>Nama:</b> Isi dengan nama lengkap sesuai KTP</li>
                    <li><b>Umur:</b> Minimal 17 tahun</li>
                    <li><b>No HP:</b> Nomor aktif untuk konfirmasi</li>
                    <li><b>Jenis Mobil:</b> Pilih Bensin / Listrik</li>
                    <li><b>Tipe Mobil:</b> Pilih mobil yang tersedia</li>
                    <li><b>Tanggal Booking:</b> Tanggal penggunaan mobil</li>
                    <li><b>Tanggal Pemesanan:</b> Hari saat booking dibuat</li>
                    <li><b>Bukti DP:</b> Upload bukti pembayaran DP</li>
                </ul>

                <div class="alert alert-info mt-3">
                    ⚠️ Booking akan diproses oleh admin terlebih dahulu.
                </div>
            </div>
        </div>

    </div>

    {{-- RIWAYAT --}}
    <div class="mt-5">
        <div class="card shadow p-4">
            <h4 class="mb-4">Riwayat Booking</h4>

            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Mobil</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($bookings as $b)
                    <tr>
                        <td>{{ $b->name }}</td>
                        <td>{{ $b->car_name }}</td>
                        <td>
                            @if($b->status == 'pending')
                                <span class="badge badge-warning">Pending</span>
                            @elseif($b->status == 'approved')
                                <span class="badge badge-success">Sukses</span>
                            @else
                                <span class="badge badge-danger">Gagal</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">Belum ada booking</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

</div>

@endsection