@extends('layouts.app')

@section('content')
    <div class="biodata d-flex">
        <div class="container mt-5 p-5 ">
            <div class="row">
                <div class="col-4 my-auto text-center">
                    <img class="w-50 rounded-2" src="{{Vite::asset('resources/images/IMG20240301.jpeg')}}" alt="">
                </div>
                <div class="col-8">
                    <h5>Yuk lebih kenal saya lebih lanjut...</h5>
                    <p class="mt-4 w-75">saya adalah mahasiswi telkom university surabaya, yang memiliki kemampuan untuk bekerja sama dalam tim, dan juga kemampuan untuk menyelesaikan suatu masalah dengan cepat dan tepat.</p>
                    <hr>
                    <div class="row">
                        <div class="col-3">
                            <p class="mb-0">Nama</p>
                            <p class="mb-0">Tanggal Lahir</p>
                            <p class="mb-0">NIM</p>
                            <p class="mb-0">Email</p>
                            <p class="mb-0">No Telp</p>
                        </div>
                        <div class="col-9">
                            <p class="fw-medium mb-0">: Vanessa Agatha</p>
                            <p class="fw-medium mb-0">: 20 Agustus 2004</p>
                            <p class="fw-medium mb-0">: 1204220019</p>
                            <p class="fw-medium mb-0">: nessaaptr@gmail.com</p>
                            <p class="fw-medium mb-0">: 081216569487</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
