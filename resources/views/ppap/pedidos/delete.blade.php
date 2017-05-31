{!! Form::open(['url' => 'ppap/pedidos/'.$pedido->idpedidos, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
	<input type="submit" class="btn btn-danger" value="Eliminar"></input>
{!! Form::close() !!}