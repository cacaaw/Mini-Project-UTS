@extends('layouts.app')

@section('content')
    <div class="container daftar">
        <div class="row">
            <div class="col">
                <h2 class="pb-2">Daftar Barang</h2>
            </div>
            <div class="col-auto">
                <a class="btn-add btn border-0" href="{{ route('barangs.create') }}">Tambah Barang</a>
            </div>
        </div>
        <div class="table-barang border-3 p-3">

            <table class="table mt-2 table-bordered">
                <thead>
                    <tr class="table-danger">
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $barangs)
                        <tr>
                            <td>{{ $barangs->kode_barang }}</td>
                            <td>{{ $barangs->nama_barang }}</td>
                            <td>{{ $barangs->harga_barang}}</td>
                            <td>{{ $barangs->satuan->kode_satuan }}</td>
                            <td>{{ $barangs->deskripsi_barang }}</td>
                            <td>
                                <a class="btn btn-sm  btn-warning" href="{{ route('barangs.edit', $barangs->id) }}">Edit</a>
                                <a class="btn btn-sm  btn-primary" href="{{ route('barangs.show', $barangs->id) }}">Detail</a>

                                <form action="{{ route('barangs.destroy', $barangs->id) }}" method="POST" type="button" class="btn btn-outline-danger p-0" onsubmit="return confirm('Anda Yakin Hapus Barang ini? ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm  btn-danger m-0 border-0">Hapus</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection
