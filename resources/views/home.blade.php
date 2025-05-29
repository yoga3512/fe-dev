@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid" src="assets/img/rumus-deret-angka.png" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h4 class="display-1">DERET FIBBONACI</h4>
                    <h5>Deret Fibonacci adalah serangkaian angka yang terus bertambah, di mana setiap angka sama dengan
                        jumlah dua angka sebelumnya</h5>
                    <a href="/tugas1" class="btn btn-tes btn-primary fw-bold" style="font-size: 1.6rem">Mulai Tes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="p-5"><img class="img-fluid" src="assets/img/huruf.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h4 class="display-2">PALINDROM</h4>
                    <h5>Palindrom adalah kata, frasa, angka, atau rangkaian karakter lain yang terbaca sama baik dari depan
                        maupun dari belakang.</h5>
                    <a href="/palindrom" class="btn btn-tes btn-primary fw-bold" style="font-size: 1.6rem">Mulai Tes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <div class="p-5">
                    <h2 class="display-3">DAFTAR SURAH QURAN</h2>
                    <div class="text-center"><a href="/tugas2" class="btn btn-tes btn-primary fw-bold"
                            style="font-size: 1.6rem">Kunjungi</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
