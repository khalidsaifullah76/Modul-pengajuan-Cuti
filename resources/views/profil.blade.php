<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Halaman profil</x-slot> 
<x-slot name="card_title">Profilk Kelompok</x-slot> 
<x-slot name="card_footer">Projek - Pengajuan Cuti</x-slot>

<div class="card-body">
<div class="container">
    <h4 class="text-center mt-4">Selamat Datang Di Website Pengajuan Cuti HexaTech<br />Projek UAS</h4>
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="card-title">Anggota  Kelompok 5</h5>
                            <div class="text-center">
                                <img src="{{ asset('assets/img/photo1.png') }}" class="img-fluid" alt="Profile Image">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Khalid Saifullah</strong> </li>
                                <li class="list-group-item"><strong>M. Faisal Rosyid</strong></li>
                                <li class="list-group-item"><strong>M. Afif Naufal</strong></li>
                                <li class="list-group-item"><strong>M. Angga Syahputra Purba</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</x-layout>