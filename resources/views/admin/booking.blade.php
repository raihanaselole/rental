@extends('layouts.app')

@section('content')

<div class="container pt-5 mt-5">

    <h3 class="mb-4">Admin Booking</h3>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nama</th>
                <th>No HP</th> {{-- TAMBAHAN --}}
                <th>Mobil</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @foreach($bookings as $b)
        <tr>
            <td>{{ $b->name }}</td>
            <td>{{ $b->phone }}</td> {{-- TAMBAHAN --}}
            <td>{{ $b->car_name }}</td>



            <td>
                @if($b->status == 'pending')
                    <span class="badge badge-warning">Pending</span>
                @elseif($b->status == 'approved')
                    <span class="badge badge-success">ACC</span>
                @else
                    <span class="badge badge-danger">Ditolak</span>
                @endif
            </td>

            <td>
                <a href="/admin/booking/approve/{{ $b->id }}" class="btn btn-success btn-sm">ACC</a>
                <a href="/admin/booking/reject/{{ $b->id }}" class="btn btn-danger btn-sm">Tolak</a>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>

</div>

@endsection