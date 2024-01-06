@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h2 class="text-center">Hasil Pendaftaran</h2>

    @if ($daftarItems->count() > 0)
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Semester</th>
                    <th>IPK</th>
                    <th>Pilihan Beasiswa</th>
                    <th>Berkas</th> 
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarItems as $daftar)
                    <tr>
                        <td>{{ $daftar->nama }}</td>
                        <td>{{ $daftar->email }}</td>
                        <td>{{ $daftar->no_hp }}</td>
                        <td>{{ $daftar->semester }}</td>
                        <td>{{ $daftar->ipk }}</td>
                        <td>{{ $daftar->pilihanbeasiswa }}</td>
                        <td>
                            <a href="{{ asset('' . $daftar->berkas) }}" target="_blank">Lihat Berkas</a>
                        </td>
                        <td>{{ $daftar->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center">Tidak ada data pendaftaran.</p>
    @endif
</div>

@endsection
