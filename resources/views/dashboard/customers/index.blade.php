@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Customers</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <div class="d-flex justify-content-end">

            <div class="col-md-4">
                <form action="/dashboard/customers">
                    <div class="input-group mb-1">
                        <input type="search" class="form-control" placeholder="Search..." name="keyword"
                            value="{{ request('keyword') }}">
                        <button class="btn btn-secondary" type="submit"><span data-feather="search"></span></i></button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($customers->count() > 0)
                    @foreach ($customers as $key => $post)
                        <tr>
                            <td>{{ $customers->firstItem() + $key }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <a href="/dashboard/customers/{{ $post->id }}" class="badge bg-info text-light"
                                    title="View Customer"><span data-feather="eye"></span></a>
                                <a href="https://wa.me/{{ $post->phone }}?text=*Halo%20{{ $post->name }}*,%20saya%20admin%20dari%20Metronim%20Studio%20kami%20telah%20menerima%20data%20yang%20telah%20anda%20kirim,%20dengan%20data%20sebagai%20berikut:%0ANama%20:%20{{ $post->name }}%0AEmail%20:%20{{ $post->email }}%0APhone%20:%20{{ $post->phone }}%0AType%20Customer%20:%20{{ $post->type_customer }}%0ABusiness%20Type%20:%20{{ $post->business_type }}%0AAddress%20:%20{{ $post->address }}%0A*Untuk%20diskusi%20mengenai%20pesanan%20dapat%20dilakukan%20via%20chat%20ini!*"
                                    class="badge bg-success text-light" title="Chat Whatsapp"><span
                                        data-feather="phone"></span></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-muted text-center" colspan="3">Data Tidak Ditemukan</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $customers->links() }}
        </div>
    </div>
@endsection
