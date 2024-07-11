<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Pegawai</x-slot> 
<x-slot name="card_title">Detail Pegawai :: {{ $pegawai->kode }} -  {{ $pegawai->nama }}</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">NIP</th><td>{{ $pegawai->nip }}</td></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $pegawai->gender=='L' ? 'Laki-Laki':'Perempuan' }}</td></tr>
    <tr><th>Tempat, Tgl Lahir</th><td>{{ $pegawai->tmp_lahir }}, {{ $pegawai->tgl_lahir }}</td></tr>
    <tr><th>Tanggal Lahir</th><td>{{ $pegawai->tmp_lahir }}, {{ $pegawai->tgl_lahir }}</td></tr>
    <tr><th>Telpon</th><td>{{ $pegawai->telpon }}</td></tr>
    <tr><th>Alamat</th><td>{{ $pegawai->alamat }}</td></tr>
    <tr><th>Id Divisi</th><td>{{ $pegawai->divisi_iddivisi }}</td></tr> 
</table>
<div>
    <a href="{{ route('pegawai.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
