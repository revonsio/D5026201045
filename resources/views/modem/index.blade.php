@extends('layout.happy')
@section('title', 'Data Modem')
@section('judulhalaman', 'DATA MODEM')

@section('konten')

	<a href="/modem/tambah"> + Tambah modem Baru</a>

	<br/>
	<br/>
    <div class="container" align="center">
    </p> Cari Data modem Berdasarkan Merk atau Stock</p>
	<form action="/modem/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari modem .." value="{{ old('cari') }}">
		<input class="form-control btn-success" type="submit" value="CARI">
	</form>

	<table border="1" style="text-align: center">
		<tr>
            <th>Nomor</th>
            <th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($modem as $m)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $m->merkmodem }}</td>
			<td>{{ $m->stockmodem }}</td>
            <td>{{ $m->tersedia }}</td>

			<td>
                <a href="/modem/detail/{{ $m->kodemodem }}" class="btn btn-warning btn-sm" role="button">Detail</a>

				<a href="/modem/edit/{{ $m->kodemodem }}" class="btn btn-info btn-sm" role="button">Edit</a>

				<a href="/modem/hapus/{{ $m->kodemodem }}" class="btn btn-danger btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $modem->links()  }}


@endsection
