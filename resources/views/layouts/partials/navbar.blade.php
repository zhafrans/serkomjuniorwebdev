{{--  layout navbar --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mx-auto btn-group">
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary {{ Route::is('pilihanbeasiswa') ? 'active' : '' }}" href="{{ route('pilihanbeasiswa') }}">Pilihan Beasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary {{ Route::is('daftar') ? 'active' : '' }}" href="{{ route('daftar') }}">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary {{ Route::is('hasil') ? 'active' : '' }}" href="{{ route('hasil') }}">Hasil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary {{ Route::is('grafik') ? 'active' : '' }}" href="{{ route('grafik') }}">Grafik</a>
            </li>
        </ul>
    </div>
</nav>
