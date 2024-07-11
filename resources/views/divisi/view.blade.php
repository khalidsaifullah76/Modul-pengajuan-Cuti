<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Divisi</x-slot> 
<x-slot name="card_title">Detail Divisi :: {{ $divisi->kode }} -  {{ $divisi->nama }}</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>
<table class="table table-striped table-sm">
    <tr><th class="w-25">NIP</th><td>{{ $divisi->kode }}</td></tr>
    <tr><th>ID</th><td>{{ $divisi->id }}</td></tr>
    <tr><th>Kode</th><td>{{ $divisi->kode}}</td></tr>
    <tr><th>Divisi</th><td>{{ $divisi->nama }}</td></tr>
    <tr><th>Manager</th><td>{{ $divisi->manager }}</td></tr> 
</table>
<div>
    <a href="{{ route('divisi.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
