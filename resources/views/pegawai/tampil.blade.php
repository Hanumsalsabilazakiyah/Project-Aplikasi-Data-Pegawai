@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Pegawai</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('pegawai.tambah') }}">Tambah Pegawai</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Aksi</th>
    </tr>

    @foreach($pegawai as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nip }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->agama }}</td>
        <td>
            <a href="{{ route('pegawai.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('pegawai.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<script src="<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('table');
</script>
@endsection