<x-layout>
    <x-slot name="title">Data Jatah Cuti</x-slot>
    <x-slot name="card_title">Daftar Data Cuti</x-slot>
    <x-slot name="card_footer">HexaTech</x-slot>

    <h2 class="text-center">Data Jatah Cuti</h2>
    <a href="{{ route('jatah_cuti.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>NIP Pegawai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_jatah_cuti as $jatah_cuti)
                <tr>
                    <td>{{ strtoupper($jatah_cuti->id) }}</td>
                    <td>{{ $jatah_cuti->tahun }}</td>
                    <td>{{ $jatah_cuti->jumlah }}</td>
                    <td>{{ $jatah_cuti->pegawai_nip }}</td>
                    <td>
                        <a href="{{ route('jatah_cuti.view', ['id' => $jatah_cuti->id]) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('jatah_cuti.edit', ['id' => $jatah_cuti->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jatah_cuti.destroy', ['id' => $jatah_cuti->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
