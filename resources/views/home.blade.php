@extends('layouts.main')

@section('container')
    <div class="p-3 mb-2 text-center">
        <div class="row">
            <div class="">
                <img src="/img/ms.jpg" class="rounded mx-auto d-block pb-3 w-25" alt="...">
            </div>
            <figure>
                <blockquote class="blockquote">
                    <p>Giving UI Better with UX</p>
                </blockquote>
                {{-- <div class="d-grid gap-2 d-md-block mb-2">
                    <button class="btn btn" style="background-color: yellow;" type="button">Chat via
                        Whatshapp</button>
                </div> --}}

                <div class="d-md-block mb-5">
                    <a href="/order" class="btn btn-primary" type="button">Order</a>
                </div>
                <figcaption class="blockquote-footer">Have a nice day!!<br>
                    Operational <cite title="8Am - 18-00pm">8Am - 18-00pm</cite>
                </figcaption>
            </figure>

            <div class="col">
            </div>
        </div>
    </div>
    <hr>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h1 class="display-5 pt-5 mb-3">The best solution UI UX Desain Services and Digital development to help you
                </h1>
                <p class="fs-4 fw-light">create easy-to-use digital products faster</p>
                <a href="/portfolios/" class="btn btn-primary shadow-lg pt-2 mb-5 mt-5 rounded my-3 px-2"><i
                        class="bi bi-eye mx-2"></i>View portfolios<i class="bi bi-arrow-right mx-2"></i></a>
            </div>
            <div class="col">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="">

            </div>
            <hr class="my-3">
        </div>
    </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-primary text-muted">
        <!-- Section: Links  -->
        <section class="py-1">
            <div class="container text-center text-md-start mt-3">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4 text-light">
                            </i>Our Location
                        </h6>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2372.2584198819586!2d107.60266348596433!3d-6.897309023964016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e644d27034e3%3A0xe84a0ea564dd9dde!2sJl.%20Kb.%20Bibit%20Tengah%20No.24%2C%20Tamansari%2C%20Kec.%20Bandung%20Wetan%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040116!5e0!3m2!1sid!2sid!4v1684276261699!5m2!1sid!2sid"
                            style="border:0; width: 100%; height: 85%;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-4 text-light">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            About Us
                        </h6>
                        <p><i class="   bi bi-house"></i> Jl. Kb. Bibit Tengah No.24, Tamansari, Kec. Bandung Wetan, Kota
                            Bandung, Jawa Barat 40116</p>
                        <p>
                            <i class="bi bi-envelope"></i>
                            info@example.com
                        </p>
                        <p><i class="bi bi-telephone"></i> +62 878-2377-0995</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgb(0, 78, 167); color:white;">
            &copy; 2023 - {{ date('Y') }}
        </div>
        <!-- Copyright -->
    </footer>


    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);

        .whatsapp {
            font-family: Roboto, Arial, Sans-serif;
            font-size: 14px;
            font-weight: 400;
            right: 2%;
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
            width: 150px
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
            </svg><span>Ask Admin!</span></a>
        <div>
        @endsection
