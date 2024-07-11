<x-layout>
    <x-slot name="title">Kelola Jatah Cuti</x-slot>
    <x-slot name="card_title">Form Kelola Jatah cuti</x-slot>
    <x-slot name="card_footer">@HexaTech</x-slot>

    <form action="{{ route('jatah_cuti.store') }}" method="post">
        @csrf
        <!-- <div class="form-group">
            <label for="kode">ID Jatah Cuti</label>
            <input type="text" name="idJ" id="id" value="{{ $jatah_cuti->id }}" class="form-control" required>
        </div> -->
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun" value="{{ $jatah_cuti->tahun }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Jatah Cuti</label>
            <input type="text" name="jumlah" id="jumlah" value="{{ $jatah_cuti->jumlah }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pegawai">NIP Pegawai</label>
            <select name="pegawai_nip" class="form-select form-select-lg mb-3">
                <option>--Pilih--</option>
                @foreach($list_pegawai as $pegawai)
                <option value="{{ $pegawai->nip }}" {{ $jatah_cuti->pegawai_nip == $pegawai->nip ? 'selected' : '' }}>
                    {{ $pegawai->nip }}
                </option>
                @endforeach
            </select>
        </div>
        <input type="hidden" name="id" value="{{ $jatah_cuti->id }}">
        <a href="{{ url('jatah_cuti/show') }}" class="btn btn-success mr-2">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>
