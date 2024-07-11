<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Jatah cuti</x-slot> 
<x-slot name="card_title">Detail Jatah cuti :: {{ $jatah_cuti->pegawai_nip }} -  {{ $jatah_cuti->tahun }}</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>
<table class="table table-striped table-sm">
    <tr><th>ID jatah_cuti</th><td>{{ $jatah_cuti->id }}</td></tr>
    <tr><th>Tahun</th><td>{{ $jatah_cuti->tahun}}</td></tr>
    <tr><th>Jumlah</th><td>{{ $jatah_cuti->jumlah }}</td></tr>
    <tr><th>NIP Pegawai</th><td>{{ $jatah_cuti->pegawai_nip }}</td></tr> 
</table>
<div>
    <a href="{{ route('jatah_cuti.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>


