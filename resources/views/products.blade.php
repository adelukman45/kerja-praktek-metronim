@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <h1 class="mb-3 text-center">{{ $title }}</h1>

        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/products">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn" style="background-color: yellow; type=" submit">Search</button>
                    </div>
                </form>
            </div>
            <ul class="nav justify-content-center nav-pills">
                @foreach ($categories as $category)
                    <li class="nav-item mx-1 my-1">
                        <a class="nav-link active text-dark bg-light shadow p-2 mb-2 bg-body rounded" aria-current="page"
                            href="/products/{{ $category->name }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        @if ($products->count())
            <div class="container">

                <div class="row">
                    <hr>
                    @foreach ($products as $product)
                        <div class="col-sm-4" id="myScrollspy">
                            <div class="list-group">
                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                    alt="{{ $product->category->name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="section1">
                                <h2 class="mt-3">{{ $product->name }}</h2>
                                <p>{!! $product->detail !!}</p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="d-grid gap-2d- md-block">
                                <a href="" class="btn btn-success">Order Produk</a>
                            </div>
                        </div>
                        <hr class="my-3">
                    @endforeach
                </div>
            </div>
    </div>
@else
    <p class="text-center fs-4">Produk Tidak Ditemukan.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $products->links() }}
    </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Section: Links  -->
        <section class="py-1">
            <div class="container text-center text-md-start mt-3">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4"
                            style="color: yellow;>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <i class="
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                          fas fa-gem ">
                            </i>Lokasi
                            Kami
                        </h6>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.6312353081626!2d107.723948!3d-6.934602!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c3258c3745ab%3A0x32896fc8d94f19fe!2sJl.%20Situ%20Seeng%20No.3%2C%20Cibiru%20Wetan%2C%20Kec.%20Cileunyi%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040626!5e0!3m2!1sid!2sid!4v1646569982536!5m2!1sid!2sid"
                            style="border:0; width: 100%; height: 85%;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: yellow;">
                            Tentang Kami
                        </h6>
                        <p><i class="   bi bi-house"></i> Jl. Situ Seeng No.3, Cibiru Wetan, Kec. Cileunyi,
                            Kabupaten
                            Bandung, Jawa Barat</p>
                        <p>
                            <i class="bi bi-envelope"></i>
                            info@example.com
                        </p>
                        <p><i class="bi bi-telephone"></i> 62 878-3107-7691</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: black;">
            &copy; 2022 - {{ date('Y') }}
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    {{-- <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-6 my-3">
                    <h5 class="">About</h5>
                    <div class="embed-responsive embed-responsive-3by4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.1578077767573!2d107.72340112921526!3d-6.93460249968685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c3258c3745ab%3A0x32896fc8d94f19fe!2sJl.%20Situ%20Seeng%20No.3%2C%20Cibiru%20Wetan%2C%20Kec.%20Cileunyi%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040626!5e0!3m2!1sid!2sid!4v1646099102733!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col my-3">
                </div>
            </div>
        </div>
        <div class="text-center">
            <p class="text-muted">&copy; 2020 - {{ date('Y') }}</p>
        </div>
    </footer> --}}


    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);

        .whatsapp {
            font-family: Roboto, Arial, Sans-serif;
            font-size: 14px;
            font-weight: 400;
            right: 5%;
            position: fixed;
            bottom: 0;
            z-index: 999;
        }

        a {
            color: #fff;
            text-decoration: none;
            transition: ease-in-out .2s
        }

        a:hover {
            box-shadow: 0 1px 4px rgba(0, 0, 0, .12), 0 1px 3px rgba(0, 0, 0, .24);
            color: #fff
        }

        .icons {
            background: #25d366;
            border-radius: 10px 10px 0 0;
            display: block;
            height: 42px;
            margin-bottom: 20px;
            width: 220px
        }

        .icons:hover {
            background: #128c7e
        }

        .icons span {
            display: block;
            left: 5px;
            top: 5px;
            transform: translate(0, 10px)
        }

        svg {
            border-radius: 10px;
            display: block;
            fill: #fff;
            float: left;
            height: 42px;
            margin-right: 5px;
            -webkit-transition: ease-in-out .175s;
            transition: ease-in-out .175s;
            width: 42px
        }

    </style>
    <div class="whatsapp">

        <a class="icons" target="_blank" href="https://api.whatsapp.com/send?phone=NomorTelephon&text=Caption"><svg
                viewBox="0 0 800 800">
                <path
                    d="M519 454c4 2 7 10-1 31-6 16-33 29-49 29-96 0-189-113-189-167 0-26 9-39 18-48 8-9 14-10 18-10h12c4 0 9 0 13 10l19 44c5 11-9 25-15 31-3 3-6 7-2 13 25 39 41 51 81 71 6 3 10 1 13-2l19-24c5-6 9-4 13-2zM401 200c-110 0-199 90-199 199 0 68 35 113 35 113l-20 74 76-20s42 32 108 32c110 0 199-89 199-199 0-111-89-199-199-199zm0-40c133 0 239 108 239 239 0 132-108 239-239 239-67 0-114-29-114-29l-127 33 34-124s-32-49-32-119c0-131 108-239 239-239z" />
            </svg><span>Order Via WhatsApp</span></a>
        <div>
        @endsection
