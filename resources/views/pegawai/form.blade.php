<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Kelola Pegawai</x-slot> 
<x-slot name="card_title">Form Kelola Pegawai</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>
<form action="{{ route('pegawai.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nip">NIP pegawai</label>
        <input type="text" name="nip" id="nip" value="{{ $pegawai->nip }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender1" value="laki-laki" {{ $pegawai->gender=='laki-laki' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender2" value="perempuan" {{ $pegawai->gender=='Perempuan' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        <label for="tmp_lahir">Tempat Lahir</label>
        <input type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $pegawai->tmp_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $pegawai->tgl_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="telpon">Telpon</label>
        <input type="number" name="telpon" id="telpon" value="{{ $pegawai->telpon}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" required>{{ $pegawai->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label for="divisi">Divisi</label>
        <select name="divisi_iddivisi" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_divisi as $divisi)
            <option value="{{ $divisi->id }}" {{ $pegawai->divisi_id==$divisi->id ? 'selected': ''}}>
                {{ $divisi->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $pegawai->id }}">
    <a href="{{ route('pegawai.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>