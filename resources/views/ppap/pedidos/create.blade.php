@extends('layouts.admin')

@section('content')
	<div class="container col-xs-12">
		<h1>Nuevo PPAP</h1>
		@include('ppap.pedidos.form', ['pedidos' => $pedidos, 'url' => '/ppap/pedidos', 'method' => 'POST'])
	</div>
@endsection