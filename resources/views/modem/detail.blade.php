@extends('layout.happy')
@section('title', 'Data Modem')
@section('judulhalaman', 'DETAIL DATA MODEM')

@section('konten')
	<a href="/modem"> Kembali</a>

	<br/>
	<br/>

	@foreach($modem as $p)
        <div class="container">
            {{ $p->merkmodem }}<br>
            {{ $p->stockmodem }}<br>
            {{ $p->tersedia }}<br>
        </div>

	@endforeach

@endsection
