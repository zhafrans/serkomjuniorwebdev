@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Detail Pendaftaran Beasiswa</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Informasi Pendaftaran</h5>

            <dl class="row">
                <dt class="col-sm-3">Nama:</dt>
                <dd class="col-sm-9">{{ $daftar->nama }}</dd>

                <dt class="col-sm-3">Email:</dt>
                <dd class="col-sm-9">{{ $daftar->email }}</dd>

                <dt class="col-sm-3">Nomor HP:</dt>
                <dd class="col-sm-9">{{ $daftar->no_hp }}</dd>

                <dt class="col-sm-3">Semester Saat Ini:</dt>
                <dd class="col-sm-9">{{ $daftar->semester }}</dd>

                <dt class="col-sm-3">IPK Terakhir:</dt>
                <dd class="col-sm-9">{{ $daftar->ipk }}</dd>

                <dt class="col-sm-3">Pilihan Beasiswa:</dt>
                <dd class="col-sm-9">{{ $daftar->pilihanbeasiswa }}</dd>

                <dt class="col-sm-3">Berkas Syarat:</dt>
                <dd class="col-sm-9">
                    <a href="{{ asset('' . $daftar->berkas) }}" target="_blank">Lihat Berkas</a>
                </dd>

                <dt class="col-sm-3">Status:</dt>
                <dd class="col-sm-9">{{ $daftar->status }}</dd>
            </dl>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('pilihanbeasiswa') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection
