@extends('layouts.admin')

@section('content')

<div class="container py-5 mt-5">

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card border-0 shadow-lg rounded-lg overflow-hidden">

                {{-- HEADER --}}
                <div class="card-header bg-dark text-white py-4 px-4">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <h3 class="mb-1 font-weight-bold">
                                Detail Booking
                            </h3>

                            <small class="text-light">
                                Informasi lengkap data booking dan pembayaran
                            </small>
                        </div>

                        <div>

                            @if($booking->status == 'approved')

                                <span class="badge badge-success px-4 py-2">
                                    APPROVED
                                </span>

                            @elseif($booking->status == 'rejected')

                                <span class="badge badge-danger px-4 py-2">
                                    REJECTED
                                </span>

                            @else

                                <span class="badge badge-warning px-4 py-2">
                                    PENDING
                                </span>

                            @endif

                        </div>

                    </div>

                </div>

                {{-- BODY --}}
                <div class="card-body p-5">

                    <div class="row">

                        {{-- DATA USER --}}
                        <div class="col-md-6 mb-4">

                            <div class="border rounded p-4 h-100 bg-light">

                                <h5 class="font-weight-bold mb-4">
                                    Data Penyewa
                                </h5>

                                <div class="mb-3">
                                    <small class="text-muted">Nama Lengkap</small>
                                    <h6 class="mb-0">
                                        {{ $booking->name }}
                                    </h6>
                                </div>

                                <div class="mb-3">
                                    <small class="text-muted">No Handphone</small>
                                    <h6 class="mb-0">
                                        {{ $booking->phone }}
                                    </h6>
                                </div>

                                <div class="mb-3">
                                    <small class="text-muted">Mobil</small>
                                    <h6 class="mb-0">
                                        {{ $booking->car_name }}
                                    </h6>
                                </div>

                                <div class="mb-3">
                                    <small class="text-muted">Jenis Mobil</small>
                                    <h6 class="mb-0">
                                        {{ $booking->car_type }}
                                    </h6>
                                </div>

                                <div>
                                    <small class="text-muted">Tanggal Booking</small>
                                    <h6 class="mb-0">
                                        {{ $booking->booking_date }}
                                    </h6>
                                </div>

                            </div>

                        </div>

                        {{-- DATA PAYMENT --}}
                        <div class="col-md-6 mb-4">

                            <div class="border rounded p-4 h-100 bg-light">

                                <h5 class="font-weight-bold mb-4">
                                    Data Pembayaran
                                </h5>

                                <div class="mb-3">
                                    <small class="text-muted">
                                        Total Pembayaran DP
                                    </small>

                                    <h4 class="text-success font-weight-bold mb-0">
                                        Rp 100.000
                                    </h4>
                                </div>

                                <div class="mb-3">

                                    <small class="text-muted">
                                        Status Pembayaran
                                    </small>

                                    <div class="mt-2">

                                        @if($booking->payment_status == 'paid')

                                            <span class="badge badge-success px-3 py-2">
                                                PAID
                                            </span>

                                        @elseif($booking->payment_status == 'failed')

                                            <span class="badge badge-danger px-3 py-2">
                                                FAILED
                                            </span>

                                        @else

                                            <span class="badge badge-warning px-3 py-2">
                                                PENDING
                                            </span>

                                        @endif

                                    </div>

                                </div>

                                <div class="mb-3">
                                    <small class="text-muted">
                                        Metode Pembayaran
                                    </small>

                                    <h6 class="mb-0">
                                        {{ $booking->payment_type ?? '-' }}
                                    </h6>
                                </div>

                                <div class="mb-3">
                                    <small class="text-muted">
                                        Transaction ID
                                    </small>

                                    <h6 class="mb-0">
                                        {{ $booking->transaction_id ?? '-' }}
                                    </h6>
                                </div>

                                <div>
                                    <small class="text-muted">
                                        Waktu Pembayaran
                                    </small>

                                    <h6 class="mb-0">
                                        {{ $booking->paid_at ?? '-' }}
                                    </h6>
                                </div>

                            </div>

                        </div>

                    </div>

                    {{-- BUTTON --}}
                    <div class="d-flex justify-content-between mt-4">

                        <a href="/admin/booking"
                           class="btn btn-secondary px-4 py-2">

                            Kembali

                        </a>

                        <div>

                            <a href="/admin/booking/approve/{{ $booking->id }}"
                               class="btn btn-success px-4 py-2">

                                ACC Booking

                            </a>

                            <a href="/admin/booking/reject/{{ $booking->id }}"
                               class="btn btn-danger px-4 py-2">

                                Tolak

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection