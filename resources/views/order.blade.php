@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-5">
                        <img src="/img/ms.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="col-7">
                        <form method="POST" action="/order" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="name" class="form-label">Name</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" required autofocus placeholder="Input name..."
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="email" class="form-label">Email</label>
                                        </div>
                                        <div class="col-sm">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" id="email" required autofocus
                                                placeholder="Input email address..." value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="phone" class="form-label">Phone</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text"
                                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                    id="phone" required autofocus placeholder="Input number phone..."
                                                    value="{{ old('phone') }}">
                                                @error('phone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="type_customer" class="form-label">Type
                                                        Customer</label>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text"
                                                        class="form-control @error('type_customer') is-invalid @enderror"
                                                        name="type_customer" id="type_customer" required autofocus
                                                        placeholder="Input type customer..."
                                                        value="{{ old('type_customer') }}">
                                                    <div id="passwordHelpBlock" class="form-text mx-1">
                                                        <span>example: personal/business/other</span>
                                                    </div>
                                                    @error('type_customer')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label for="business_type" class="form-label">Business
                                                            Type</label>
                                                    </div>
                                                    <div class="col-sm">
                                                        <input type="text"
                                                            class="form-control @error('business_type') is-invalid @enderror"
                                                            name="business_type" id="business_type" required autofocus
                                                            placeholder="Input business type..."
                                                            value="{{ old('business_type') }}">
                                                        <div id="passwordHelpBlock" class="form-text mx-1">
                                                            <span>example: food/service/other</span>
                                                        </div>
                                                        @error('business_type')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3 mt-3">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="business_type" class="form-label">Address</label>
                                                        </div>
                                                        <div class="col-sm">
                                                            <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2"
                                                                placeholder="Input address...">{{ old('address') }}</textarea>
                                                            @error('address')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-grid gap-2 ">
                                                    <button type="submit" class="btn btn-primary">Order</button>
                                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

            <script>
                const name = document.querySelector('#name');
                const slug = document.querySelector('#slug');

                name.addEventListener('keyup', function() {
                    fetch('/dashboard/products/checkSlug?title=' + name.value)
                        .then(response => response.json())
                        .then(data => slug.value = data.slug)
                });

                document.addEventListener('trix-file-accept', function(e) {
                    e.preventDefault();
                })

                function previewImage() {
                    const image = document.querySelector('#image');
                    const imgPreview = document.querySelector('.img-preview');

                    imgPreview.style.display = 'block';

                    const oFReader = new FileReader();
                    oFReader.readAsDataURL(image.files[0]);

                    oFReader.onload = function(oFREvent) {
                        imgPreview.src = oFREvent.target.result;
                    }
                }
            </script>
        @endsection
