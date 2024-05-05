@extends('layouts.app')

@section('content')
    <div class="container w-75 mt-3 px-4 py-4 bg-light">
        <h2 class="pb-2 text-center">Detail Barang</h2>
        <div>
            <form class="row g-3 pt-3">
                <div class="col-md-6">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang"  class="form-control" value="{{ $daftarbarang->kode_barang }}" id="kode_barang" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang"  value="{{ $daftarbarang->nama_barang }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="harga_barang" class="form-label">Harga</label>
                    <input value="{{ number_format($daftarbarang->harga_barang, 0, ',', '.') }}" type="number" name="harga_barang" class="form-control" id="harga_barang" readonly>
                </div>
                <div class="col-md-6">
                    <label for="satuan_barang" class="form-label">Satuan</label>
                    <input type="text" name="satuan_barang" value="{{ $daftarbarang->satuan->kode_satuan . ' - ' . $daftarbarang->satuan->nama_satuan }}"  class="form-control" id="satuan_barang" readonly>
                </div>
                <div class="col-md-6">
                    <label for="deskripsi_barang" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskripsi_barang" cols="30" rows="1" readonly>{{ $daftarbarang->deskripsi_barang }}</textarea>
                </div>
                <div class="col-12 text-center">
                    <a class="btn btm-sm btn-primary px-4 col-12 mt-3" href="{{route('barangs.index')}}">Kembali</a>
                </div>
            </form>
        </div>
    </div>


@endsection
