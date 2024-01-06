@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">DAFTAR BEASISWA</h2>
    <form method="POST" action="{{ route('daftar.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nama">Masukkan Nama:</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Masukkan Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nomorHp">Nomor HP:</label>
            <input type="tel" class="form-control" id="nomorHp" placeholder="Nomor HP" name="no_hp" value="{{ old('no_hp') }}" required>
            @error('no_hp')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="semester">Semester Saat Ini:</label>
            <select class="form-control" id="semester" name="semester" oninput="calculateIpk()" required>
                <option value="" {{ old('semester') == '' ? 'selected' : '' }}>Pilih</option>
                <option value="1" {{ old('semester') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('semester') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('semester') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('semester') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('semester') == '5' ? 'selected' : '' }}>5</option>
                <option value="6" {{ old('semester') == '6' ? 'selected' : '' }}>6</option>
                <option value="7" {{ old('semester') == '7' ? 'selected' : '' }}>7</option>
                <option value="8" {{ old('semester') == '8' ? 'selected' : '' }}>8</option>
                
            </select>
            @error('semester')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="ipk">IPK Terakhir:</label>
            <input type="text" class="form-control" id="ipk" placeholder="IPK" readonly name="ipk" value="{{ old('ipk') }}" required>
        </div>
        <div class="form-group">
            <label for="pilihanBeasiswa">Pilihan Beasiswa:</label>
            <select class="form-control" id="pilihanBeasiswa" name="pilihanbeasiswa" required>
                <option value="" {{ old('pilihanbeasiswa') == '' ? 'selected' : '' }}>Pilih</option>
                <option value="Beasiswa Akademik" {{ old('pilihanbeasiswa') == 'Beasiswa Akademik' ? 'selected' : '' }}>Beasiswa Akademik</option>
                <option value="Beasiswa Non-Akademik" {{ old('pilihanbeasiswa') == 'Beasiswa Non-Akademik' ? 'selected' : '' }}>Beasiswa Non-Akademik</option>
                <option value="Beasiswa Penghargaan" {{ old('pilihanbeasiswa') == 'Beasiswa Penghargaan' ? 'selected' : '' }}>Beasiswa Penghargaan</option>
            </select>
            @error('pilihanbeasiswa')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="berkasSyarat">Upload Berkas Syarat:</label>
            <input type="file" class="form-control-file" id="berkasSyarat" accept=".pdf, .jpg, .zip" name="berkas" required>
            @error('berkas')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="daftarButton">Daftar</button>
            <a href="{{ route('pilihanbeasiswa') }}"><button type="button" class="btn btn-secondary">Batal</button></a>
        </div>

        {{-- untuk menampilkan pesan error jika ada error saat validasi input pada form --}}
        @if ($errors->any()) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        calculateIpk();
    });

    function calculateIpk() {
        var semester = document.getElementById("semester").value;
        var ipkInput = document.getElementById("ipk");
        var pilihanBeasiswa = document.getElementById("pilihanBeasiswa");
        var berkasSyarat = document.getElementById("berkasSyarat");
        var daftarButton = document.getElementById("daftarButton");

        var ipkMap = {
            1: 3.8,
            2: 3.9,
            3: 3.7,
            4: 3.4,
            5: 2.7,
            6: 2.9,
            7: 2.8,
            8: 3,
        };

        // Check if semester undefined atau not selected
        var calculatedIpk = semester !== '' ? ipkMap[semester] : 0;

        ipkInput.value = calculatedIpk;

        // jika semester tidak selected dan ipk dibawah 3, disable inputs dan button
        if (semester === '' || calculatedIpk < 3) {
            pilihanBeasiswa.disabled = true;
            berkasSyarat.disabled = true;
            daftarButton.disabled = true;
        } else {
            // jika semester selected dan IPK diatas 3, enable inputs dan button
            pilihanBeasiswa.disabled = false;
            berkasSyarat.disabled = false;
            daftarButton.disabled = false;
            pilihanBeasiswa.focus();
        }
    }
</script>

@endsection
