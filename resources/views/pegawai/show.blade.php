<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Pegawai</x-slot> 
<x-slot name="card_title">Daftar Pegawai Aktif</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>

<h2 class="text-center">Data Pegawai</h2>
@if(Auth::user()->role=='administrator')
<a href="{{ route('pegawai.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah Data</i></button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Jenis Kelamin</th>  
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Id Divisi</th> 
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_pegawai as $pegawai)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pegawai->nip}}</td>
            <td>{{ $pegawai->gender }}</td>
            <td>{{ $pegawai->tmp_lahir }}</td>
            <td>{{ $pegawai->tgl_lahir }}</td>
            <td>{{ $pegawai->telpon }}</td>
            <td>{{ $pegawai->alamat }}</td>
            <td>{{ $pegawai->divisi_iddivisi }}</td>
            <td>
            <a href="{{ route('pegawai.view', ['id' => $pegawai->id]) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('pegawai.edit', ['id' => $pegawai->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pegawai.destroy', ['id' => $pegawai->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>