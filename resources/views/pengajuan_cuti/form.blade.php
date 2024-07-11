<x-layout>
<x-slot name="title">Kelola Pengajuan Cuti</x-slot> 
<x-slot name="card_title">Form Pengajuan Cuti</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>

<form action="{{ route('pengajuan_cuti.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah" value="{{ $pengajuan_cuti->jumlah }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_awal">Tanggal Awal</label>
        <input type="date" name="tanggal_awal" id="tanggal_awal" value="{{ $pengajuan_cuti->tanggal_awal }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_akhir">Tanggal Akhir</label>
        <input type="date" name="tanggal_akhir" id="tanggal_akhir" value="{{ $pengajuan_cuti->tanggal_akhir }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="ket">Keterangan</label>
        <input type="text" name="ket" id="ket" value="{{ $pengajuan_cuti->ket }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="pegawai">NIP Pegawai</label>
        <select name="pegawai_nip" class="form-select form-select-lg mb-3" required>
            <option value="">--Pilih--</option>
            @foreach($list_pegawai as $pegawai)
            <option value="{{ $pegawai->nip }}" {{ $pengajuan_cuti->pegawai_nip == $pegawai->nip ? 'selected' : '' }}>
                {{ $pegawai->nip }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $pengajuan_cuti->id }}">
    <a href="{{ route('pengajuan_cuti.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>
