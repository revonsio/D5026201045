@extends('layout.happy')
@section('title', 'Data Modem')
@section('judulhalaman', 'EDIT DATA MODEM')

@section('konten')
	<a href="/modem"> Kembali</a>

	<br/>
	<br/>

	@foreach($modem as $p)
	<form action="/modem/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodemodem" value="{{ $p->kodemodem }}"> <br/>
		Merk Modem <input type="text" required="required" name="merk" value="{{ $p->merkmodem }}"> <br/>
		Stock Modem <input type="number" required="required" name="stock" value="{{ $p->stockmodem }}"> <br/>
        Tersedia: <br>
		<input type="radio" id="y" name="tersedia" value="Y" checked="checked">ADA</label>
            <label class="radio-inline" for="Y"> <br>
            <input type="radio" id="n" name="tersedia" value="N">TIDAK ADA</label>
            <label class="radio-inline" for="N">
	</form>
	@endforeach

@endsection
