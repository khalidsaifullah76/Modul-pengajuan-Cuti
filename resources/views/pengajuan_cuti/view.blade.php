<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Pengajuan Cuti</x-slot> 
<x-slot name="card_title">Detail Pengajuan Cuti :: {{ $pengajuan_cuti->pegawai_nip }} -  {{ $pengajuan_cuti->status }}</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">ID</th><td>{{ $pengajuan_cuti->id }}</td></tr>
    <tr><th>Tanggal Awal</th><td>{{ $pengajuan_cuti->tanggal_awal }}</td></tr>
    <tr><th>Tanggal Akhir</th><td>{{ $pengajuan_cuti->tanggal_akhir }}</td></tr>
    <tr><th>Jumlah Cuti</th><td>{{ $pengajuan_cuti->jumlah }}</td></tr>
    <tr><th>Keterangan Cuti</th><td>{{ $pengajuan_cuti->ket }}</td></tr>
    <tr><th>Status</th><td>{{ $pengajuan_cuti->status == 'D' ? 'Diterima' : ($pengajuan_cuti->status == 'P' ? 'Proses' : 'Ditolak') }}</td></tr>
    <tr><th>NIP Pegawai</th><td>{{ $pengajuan_cuti->pegawai_nip }}</td></tr> 
</table>
<div>
    <a href="{{ route('pengajuan_cuti.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
