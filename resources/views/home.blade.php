@extends('layouts.main')
@section('page-styles')
{{-- Page Css files --}}
@endsection
@section('container')
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    {{-- <section class="portfolio bg-white" style=""> --}}
        <div class="container text-center">
            <h1 class="fw-bold" style="color: #044581; font-size: 4rem">PILIH TUGAS</h1>
            {{-- <h4 style="font-size: 2.4rem">Best offer for you</h4> --}}

            <div class="row text-center" style="">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card border-0 mx-auto my-5 shadow" style="width: 30rem">
                        <div class="card-head position-relative">
                            {{-- <img src="img/porto1.png" class="card-img-top" alt="..." /> --}}
                            <div class="overlay"></div>
                            <div class="button d-flex justify-content-center"><a href="/tugas1"
                                    class="btn btn-tes btn-primary fw-bold" style="font-size: 1.6rem">TES</a></div>
                        </div>
                        <div class="card-body">
                            {{-- <h5 class="card-title fw-bolder" style="font-size: 2rem">Tugas 1</h5> --}}
                            <p class="card-text fw-bold" style="color: #0199ff; font-size: 1.6rem">Bilangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card border-0 mx-auto my-5 shadow" style="width: 30rem">
                        <div class="card-head position-relative">
                            {{-- <img src="img/porto2.png" class="card-img-top" alt="..." /> --}}
                            <div class="overlay"></div>
                            <div class="button d-flex justify-content-center"><a href="/tugas2"
                                    class="btn btn-tes btn-primary fw-bold" style="font-size: 1.6rem">TES</a></div>
                        </div>
                        <div class="card-body">
                            {{-- <h5 class="card-title fw-bolder" style="font-size: 2rem">Tugas 2</h5> --}}
                            <p class="card-text fw-bold" style="color: #0199ff; font-size: 1.6rem">API</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </section> --}}
    <!-- end portfolio-->

    {{-- <div class="row">
        <div class="col md-6">
            <div class="card" style="width: 18rem;">
                <a href="/tugas1" class="btn btn-primary">
                    <div class="card-body">
                        <h5 class="card-title">Tugas 1</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col md-6">
            <div class="card" style="width: 18rem;">
                <a href="/tugas2" class="btn btn-primary">
                    <div class="card-body">
                        <h5 class="card-title">Tugas 2</h5>
                    </div>
                </a>
            </div>
        </div>
    </div> --}}
@endsection
