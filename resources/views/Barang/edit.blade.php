@extends('layouts.app')
@section('content')
    <div class="container w-75 mt-3 px-4 py-4 bg-light">
        <h2 class="pb-2 text-center">Edit Barang</h2>
        <div>
            <form class="row g-3 pt-3" action="{{ route('barangs.update', $daftarbarang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label for="kode_barang" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control"
                        id="kode_barang" value="{{ $daftarbarang->kode_barang }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang"  class="form-control"
                        id="nama_barang" value="{{ $daftarbarang->nama_barang }}" requaired>
                </div>
                <div class="col-md-6">
                    <label for="harga_barang" class="form-label">Harga</label>
                    <input type="number" name="harga_barang" value="{{ $daftarbarang->harga_barang }}" class="form-control"
                        id="harga_barang" requaired>
                </div>
                <div class="col-md-6">
                    <label for="satuan_barang" class="form-label"></label>
                    <select class="form-select" name="satuan_barang" id="satuan_barang" required>
                        @php
                            $selected = ''; if ($errors->any()) { $selected = old('satuan'); }
                            else { $selected = $daftarbarang->satuan_barang_id; }
                        @endphp
                        @foreach ($daftarsatuan as $satuan)
                            <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>
                                {{ $satuan->kode_satuan . ' - ' . $satuan->nama_satuan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="deskripsi_barang" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi_barang" class="form-control" id="deskripsi_barang" cols="30" rows="1" requaired>{{ $daftarbarang->deskripsi_barang }}</textarea>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <a class="btn btn-outline-secondary col-6 me-2 mt-3" href="{{ route('barangs.index') }}">Kembali</a>
                    <button type="submit" class="btn btn-primary col-6 mt-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
