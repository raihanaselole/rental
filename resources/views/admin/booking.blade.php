@extends('layouts.admin')

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
                <th>Status Payment</th>
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
                <a href="{{ route('admin.booking.show', $b->id) }}"
                class="btn btn-info btn-sm">
                Detail
                </a>

                <a href="/admin/booking/approve/{{ $b->id }}"
                class="btn btn-success btn-sm">
                ACC
                </a>

                <a href="/admin/booking/reject/{{ $b->id }}"
                class="btn btn-danger btn-sm">
                Tolak
                </a>
            </td>
            <td>

                @if($b->payment_status == 'paid')

                    <span class="badge badge-success">
                        Paid
                    </span>

                @elseif($b->payment_status == 'pending')

                    <span class="badge badge-warning">
                        Pending
                    </span>

                @else

                    <span class="badge badge-danger">
                        Failed
                    </span>

                @endif

            </td>
        </tr>
        @endforeach
        </tbody>

    </table>

</div>

@endsection