@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Pilihan Beasiswa</h2>

    <div class="card-deck">
        <div class="card">
            <img src="{{ asset('/image/akademik.jpg') }}" class="card-img-top w-100" alt="Beasiswa Akademik Image">
            <div class="card-body">
                <h5 class="card-title" style="margin-top: 69px">Beasiswa Akademik</h5>
                <p class="card-text">Beasiswa untuk prestasi akademik.</p>
                <br>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#akademikModal">Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('/image/nonakademik.jpg') }}" class="card-img-top w-100" alt="Beasiswa Non-Akademik Image">
            <div class="card-body">
                <h5 class="card-title">Beasiswa Non-Akademik</h5>
                <p class="card-text">Beasiswa untuk prestasi diluar akademik.</p>
                <br>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#nonAkademikModal">Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('/image/penghargaan.jpg') }}" class="card-img-top w-100" alt="Beasiswa Penghargaan Image">
            <div class="card-body">
                <h5 class="card-title">Beasiswa Penghargaan</h5>
                <p class="card-text">Beasiswa untuk pencapaian luar biasa seseorang dalam suatu bidang.</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#penghargaanModal">Detail</a>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="akademikModal" tabindex="-1" role="dialog" aria-labelledby="akademikModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="akademikModalLabel">Beasiswa Akademik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <p>Beasiswa Akademik diberikan kepada mahasiswa yang mencapai prestasi akademik yang sangat baik. Biasanya, penerima beasiswa ini memiliki nilai rapor atau IPK yang tinggi. Tujuan dari beasiswa akademik adalah untuk memberikan pengakuan dan dorongan kepada siswa yang menunjukkan keunggulan dalam pencapaian akademis mereka. Beasiswa ini dapat mencakup pembebasan biaya kuliah, bantuan pendidikan, atau tunjangan lainnya untuk mendukung pengembangan pendidikan mereka.</p>
                    <h6>Syarat:</h6>
                    <ul>
                        <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                        <li>Memiliki IPK di atas 3</li>
                        <li>Melampirkan berkas pendukung yaitu Nilai Raport</li>
                    </ul>
                </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Add similar modals for nonAkademikModal and penghargaanModal -->
    <!-- Non-Akademik Modal -->
    <div class="modal fade" id="nonAkademikModal" tabindex="-1" role="dialog" aria-labelledby="nonAkademikModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="akademikModalLabel">Beasiswa Non-Akademik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <p>Beasiswa Non-Akademik diberikan kepada individu yang menonjol di luar bidang akademis, seperti olahraga, seni, kepemimpinan, atau pelayanan masyarakat. Beasiswa ini menekankan prestasi di bidang-bidang non-akademis dan bertujuan untuk memberikan dukungan finansial kepada mereka yang telah menunjukkan keunggulan di luar kelas. Penerima beasiswa non-akademik dapat mencakup atlet, seniman, pemimpin organisasi, atau individu yang telah memberikan kontribusi positif kepada masyarakat.</p>
                    <h6>Syarat:</h6>
                    <ul>
                        <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                        <li>Memiliki IPK di atas 3</li>
                        <li>Melampirkan berkas prestasi diluar akademik</li>
                    </ul>
                </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Penghargaan Modal -->
    <div class="modal fade" id="penghargaanModal" tabindex="-1" role="dialog" aria-labelledby="penghargaanModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="akademikModalLabel">Beasiswa Penghargaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <p>Beasiswa Penghargaan diberikan sebagai bentuk pengakuan terhadap pencapaian luar biasa, dedikasi, atau kontribusi istimewa seseorang dalam suatu bidang. Beasiswa ini dapat diberikan kepada siswa, profesional, atau individu di berbagai tingkatan. Penerima beasiswa penghargaan mungkin telah mencapai keberhasilan yang luar biasa dalam akademis, penelitian, kewirausahaan, atau pengabdian kepada masyarakat. Tujuannya adalah memberikan apresiasi dan dukungan kepada individu yang telah memberikan dampak positif dan inspiratif dalam lingkungannya.</p>
                    <h6>Syarat:</h6>
                    <ul>
                        <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                        <li>Memiliki IPK di atas 3</li>
                        <li>Melampirkan sertifikat pendukung sebagai bukti pencapaian pada suatu bidang</li>
                    </ul>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
