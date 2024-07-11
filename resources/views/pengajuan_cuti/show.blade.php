<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Pengajuan Cuti</x-slot> 
<x-slot name="card_title">Daftar Pengajuan Cuti</x-slot> 
<x-slot name="card_footer">@HexaTech</x-slot>

<h2 class="text-center">Data Pengajuan Cuti</h2>
<a href="{{ route('pengajuan_cuti.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id Pengajuan Cuti</th>  
            <th>Tanggal Awal</th> 
            <th>Tanggal Akhir</th>
            <th>Jumlah</th>
            <th>Keterangan</th>   
            <th>Status</th>    
            <th>NIP Pegawai</th>
            <th>Aksi</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($list_pengajuan_cuti as $pengajuan_cuti)
        <tr>
            <td>{{ $pengajuan_cuti->id }}</td>
            <td>{{ $pengajuan_cuti->tanggal_awal }}</td>
            <td>{{ $pengajuan_cuti->tanggal_akhir }}</td>
            <td>{{ $pengajuan_cuti->jumlah }}</td>
            <td>{{ $pengajuan_cuti->ket }}</td>
            <td>{{ $pengajuan_cuti->status }}</td>
            <td>{{ $pengajuan_cuti->pegawai_nip }}</td>
            <td>
                <a href="{{ route('pengajuan_cuti.view', ['id' => $pengajuan_cuti->id]) }}" class="btn btn-primary">View</a>
                <a href="{{ route('pengajuan_cuti.edit', ['id' => $pengajuan_cuti->id]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pengajuan_cuti.destroy', ['id' => $pengajuan_cuti->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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


