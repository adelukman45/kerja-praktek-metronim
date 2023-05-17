@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">View Customer, {{ $customer->name }}</h1>
        <button class="btn btn-success">
            <a href="https://wa.me/{{ $customer->phone }}?text=*Halo%20{{ $customer->name }}*,%20saya%20admin%20dari%20Metronim%20Studio%20kami%20telah%20menerima%20data%20yang%20telah%20anda%20kirim,%20dengan%20data%20sebagai%20berikut:%0ANama%20:%20{{ $customer->name }}%0AEmail%20:%20{{ $customer->email }}%0APhone%20:%20{{ $customer->phone }}%0AType%20Customer%20:%20{{ $customer->type_customer }}%0ABusiness%20Type%20:%20{{ $customer->business_type }}%0AAddress%20:%20{{ $customer->address }}%0A*Untuk%20diskusi%20mengenai%20pesanan%20dapat%20dilakukan%20via%20chat%20ini!*"
                class="badge bg-success text-light" title="Chat Whatsapp"><span data-feather="phone"></span></a>
            Hubungi {{ $customer->name }} Via Whatsapp</button>
    </div>

    <section class="mt-3" style="background-color: #eee;">
        <div class="container py-3">
            <div class="row">
                <div class="col">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="/dashboard/edit/{{ $customer->id }}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Name</p>
                                    </div>
                                    <div class="card col-sm-8">
                                        <p class="">{{ $customer->name }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="card col-sm-8">
                                        <p class="">{{ $customer->email }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="card col-sm-8">
                                        <p class="">{{ $customer->phone }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Type Customer</p>
                                    </div>
                                    <div class="card col-sm-8">
                                        <p class="">{{ $customer->type_customer }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Business Type</p>
                                    </div>
                                    <div class="card col-sm-8">
                                        <p class="">{{ $customer->business_type }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="card col-sm-8">
                                        <p class="">{{ $customer->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
