<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Divisi</x-slot> 
<x-slot name="card_title">Daftar Divisi</x-slot> 
<x-slot name="card_footer">HexaTech</x-slot>

<h2 class="text-center">Data Divisi</h2>
<a href="{{ route('divisi.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id Divisi</th>
            <th>Kode</th>  
            <th>Nama Divisi</th>
            <th>Manager</th>
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_divisi as $divisi)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $divisi->kode }}</td>
            <td>{{ $divisi->nama }}</td>
            <td>{{ $divisi->manager }}</td>
            <td>
            <a href="{{ route('divisi.view', ['id' => $divisi->id]) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('divisi.edit', ['id' => $divisi->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('divisi.destroy', ['id' => $divisi->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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