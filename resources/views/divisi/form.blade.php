<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Divisi</x-slot> 
<x-slot name="card_title">Form Divisi</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>
<form action="{{ route('divisi.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="kode">Kode Divisi</label>
        <input type="text" name="kode" id="kode" value="{{ $divisi->kode}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama Divisi</label>
        <input type="text" name="nama" id="nama" value="{{ $divisi->nama}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="manager">Nama Manager</label>
        <input type="text" name="manager" id="manager" value="{{ $divisi->manager}}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $divisi->id }}">
    <a href="{{ url('divisi/show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>