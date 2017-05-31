@extends('layouts.admin')

@section("content")
	<div class="container white col-xs-12">
		<h1>Editar Producto</h1>
		@include('ppap.pedidos.form', ['pedidos' => $pedidos, 'url' => '/ppap/pedidos/'.$pedidos->idpedidos, 'method' => 'PATCH'])
	</div>
@endsection