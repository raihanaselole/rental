@extends('layouts.app')

@section('content')

<div class="container pt-5 mt-5">

    <h3>Admin Booking</h3>

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Mobil</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        @foreach($bookings as $b)
        <tr>
        <td>{{ $b->name }}</td>
        <td>{{ $b->car_name }}</td>

        <td>
        <img src="{{ asset('storage/'.$b->dp_proof) }}" width="100">
        </td>

        <td>{{ $b->status }}</td>

        <td>
        <a href="/admin/booking/approve/{{ $b->id }}" class="btn btn-success btn-sm">ACC</a>
        <a href="/admin/booking/reject/{{ $b->id }}" class="btn btn-danger btn-sm">Tolak</a>
        </td>

        </tr>
        @endforeach

    </table>

</div>

@endsection