@extends('layouts.app')

@section('title','Booking')

@section('content')

<div class="container pt-5 mt-5">

    <div class="row">

        {{-- FORM BOOKING --}}
        <div class="col-md-7 mb-4">
            <div class="card shadow border-0 rounded-lg">
                
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Form Booking Mobil</h4>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form id="booking-form">
                        @csrf

                        {{-- Nama --}}
                        <div class="form-group">
                            <label><b>Nama Lengkap</b></label>

                            <input type="text" 
                                   name="name" 
                                   class="form-control" 
                                   placeholder="Masukkan nama lengkap"
                                   required>
                        </div>

                        {{-- Umur --}}
                        <div class="form-group">
                            <label><b>Umur</b></label>

                            <input type="number" 
                                   name="age" 
                                   class="form-control" 
                                   placeholder="Contoh: 21"
                                   required>
                        </div>

                        {{-- No HP --}}
                        <div class="form-group">
                            <label><b>No Handphone</b></label>

                            <input type="text" 
                                   name="phone" 
                                   class="form-control" 
                                   placeholder="08xxxxxxxxxx"
                                   required>
                        </div>

                        {{-- Jenis Mobil --}}
                        <div class="form-group">
                            <label><b>Jenis Mobil</b></label>

                            <select id="car_type" 
                                    name="car_type" 
                                    class="form-control"
                                    required>

                                <option value="">-- Pilih Jenis Mobil --</option>

                                <option value="Bensin">
                                    Mobil Bensin
                                </option>

                                <option value="Listrik">
                                    Mobil Listrik
                                </option>

                            </select>
                        </div>

                        {{-- Tipe Mobil --}}
                        <div class="form-group">
                            <label><b>Tipe Mobil</b></label>

                            <select id="car_name" 
                                    name="car_name" 
                                    class="form-control"
                                    required>

                                <option value="">
                                    -- Pilih Mobil --
                                </option>

                                @foreach($cars as $car)

                                    <option
                                        value="{{ $car->name }}"
                                        data-type="{{ $car->type }}">

                                        {{ $car->name }} - {{ $car->type }}

                                    </option>

                                @endforeach

                            </select>
                        </div>

                        {{-- Tanggal --}}
                        <div class="form-group">
                            <label><b>Tanggal Booking</b></label>

                            <input type="date" 
                                   name="booking_date" 
                                   class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label><b>Tanggal Pemesanan</b></label>

                            <input type="date" 
                                   name="order_date" 
                                   class="form-control"
                                   required>
                        </div>

                        <button type="submit" 
                                class="btn btn-success btn-block py-2">

                            Booking & Bayar Sekarang

                        </button>

                    </form>

                </div>
            </div>
        </div>

        {{-- PETUNJUK --}}
        <div class="col-md-5 mb-4">
            <div class="card shadow border-0 rounded-lg">

                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Informasi Booking</h4>
                </div>

                <div class="card-body">

                    <ul class="pl-3">
                        <li>Isi data dengan benar sesuai identitas.</li>
                        <li>Minimal usia penyewa adalah 17 tahun.</li>
                        <li>Pilih jenis mobil sesuai kebutuhan.</li>
                        <li>Pembayaran dilakukan melalui QRIS / Virtual Account.</li>
                        <li>Booking akan diproses oleh admin.</li>
                    </ul>

                    <div class="alert alert-warning mt-4">

                        <h6 class="font-weight-bold mb-2">
                            Catatan Booking
                        </h6>

                        <ul class="mb-0 pl-3">

                            <li>
                                Setelah pembayaran berhasil, status booking akan menjadi 
                                <b>Pending</b> dan menunggu konfirmasi admin.
                            </li>

                            <li class="mt-2">
                                DP yang dibayarkan sebesar 
                                <b>Rp 100.000</b>.
                            </li>

                            <li class="mt-2">
                                Jika ingin melakukan pembatalan booking, silakan hubungi admin melalui WhatsApp:
                                <br>

                                <a href="https://wa.me/6285103754664?text=Halo%20saya%20ingin%20bertanya"
                                target="_blank"
                                class="btn btn-success btn-sm mt-2">

                                Hubungi Admin WhatsApp

                                </a>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </div>

    {{-- RIWAYAT --}}
    <div class="card shadow border-0 rounded-lg mt-4">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Riwayat Booking</h4>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered text-center">

                    <thead class="thead-dark">

                        <tr>
                            <th>Nama</th>
                            <th>Mobil</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($bookings as $b)

                        <tr>

                            <td>{{ $b->name }}</td>

                            <td>{{ $b->car_name }}</td>

                            <td>{{ $b->booking_date }}</td>

                            <td>

                                @if($b->status == 'pending')

                                    <span class="badge badge-warning px-3 py-2">
                                        Pending
                                    </span>

                                @elseif($b->status == 'approved')

                                    <span class="badge badge-success px-3 py-2">
                                        Sukses
                                    </span>

                                @else

                                    <span class="badge badge-danger px-3 py-2">
                                        Ditolak
                                    </span>

                                @endif

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="4">
                                Belum ada booking
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>


{{-- MIDTRANS --}}
<script 
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="{{ config('midtrans.clientKey') }}">
</script>


{{-- FILTER MOBIL DARI DATABASE --}}
<script>

document.getElementById('car_type').addEventListener('change', function(){

    let selectedType = this.value;

    let options = document.querySelectorAll('#car_name option');

    options.forEach(option => {

        if(option.value == ""){
            option.style.display = 'block';
            return;
        }

        if(option.dataset.type == selectedType){

            option.style.display = 'block';

        } else {

            option.style.display = 'none';

        }

    });

});

</script>


{{-- PAYMENT --}}
<script>

document.getElementById('booking-form').addEventListener('submit', async function(e){

    e.preventDefault();

    let formData = new FormData(this);

    try {

        let response = await fetch("{{ route('booking.store') }}", {

            method: "POST",

            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },

            body: formData

        });

        let data = await response.json();

        console.log(data);

        if(data.snap_token){

            snap.pay(data.snap_token, {

               onSuccess: async function(result){

                console.log(result);

                // KIRIM DATA PAYMENT KE LARAVEL
                await fetch('/payment-success/' + data.booking_id, {

                    method: 'POST',

                    headers: {

                        'Content-Type': 'application/json',

                        'X-CSRF-TOKEN': '{{ csrf_token() }}'

                    },

                    body: JSON.stringify({

                        payment_type: result.payment_type,

                        transaction_id: result.transaction_id

                    })

                });

                alert("Pembayaran berhasil!");

                window.location.href = "/booking";

            },

                onPending: function(result){

                    alert("Menunggu pembayaran!");

                    location.reload();

                },

                onError: function(result){

                    alert("Pembayaran gagal!");

                }

            });

        } else {

            alert("Snap token tidak ditemukan");

        }

    } catch(error){

        console.log(error);

        alert("Terjadi error server");

    }

});

</script>

@endsection