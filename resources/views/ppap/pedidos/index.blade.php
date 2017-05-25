@extends('layouts.admin')

@section('content')
	<h3>Listado de PPAPS</h3>

	<div class="row">
	<div class=" col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover table table-bordered">
				<thead>
					<tr>
						<td>Customer Group</td>
						<td>Customer</td>
						<td>Contact Name</td>
						<td>LF coordinator</td>
						<td>Customer Part Number</td>
						<td>LF Part Number</td>
						<td>Group</td>
						<td>note/OEM Part Number</td>
						<td>Level Request</td>
						<td>Type of Request</td>
						<td>ETR#</td>
						<td>Date Request</td>
						<td>Customer Due Date</td>
						<td>LF Due Date</td>
						<td>Submited date</td>
						<td>Full/Interim Submission</td>
						<td>Day Submitted</td>
						<td>Why Open</td>
						<td>Pass Due vs If Due Date</td>
						<td>Time to Response</td>
						<td>Comments</td>
						<td>Approval date</td>
						<td>Type of no Conformity</td>
						<td>No Conformidad de Submision de ppaps</td>
						<td>IMDS Submission</td>

						<td>Acciones</td>

					<tr>
				</thead>
				<tbody>
					@foreach ($pedidos as $pedido)
					<tr>
						<td>{{ $pedido->customer_group }}</td>
						<td>{{ $pedido->customer }}</td>
						<td>{{ $pedido->contact_name }}</td>
						<td>{{ $pedido->lf_coordinator }}</td>
						<td>{{ $pedido->customer_part_number }}</td>
						<td>{{ $pedido->lf_part_number }}</td>
						<td>{{ $pedido->group }}</td>
						<td>{{ $pedido->note_oem_part_number }}</td>
						<td>{{ $pedido->level_request }}</td>
						<td>{{ $pedido->type_of_request }}</td>
						<td>{{ $pedido->etr }}</td>
						<td>{{ $pedido->date_request }}</td>
						<td>{{ $pedido->customer_due_date }}</td>
						<td>{{ $pedido->lf_due_date }}</td>
						<td>{{ $pedido->submited_date }}</td>
						<td>{{ $pedido->full_interim_submission }}</td>
						<td>{{ $pedido->day_submitted }}</td>
						<td>{{ $pedido->why_open }}</td>
						<td>{{ $pedido->pass_due_vs_lf_due_date }}</td>
						<td>{{ $pedido->time_to_response }}</td>
						<td>{{ $pedido->comments }}</td>
						<td>{{ $pedido->approval_date }}</td>
						<td>{{ $pedido->type_of_no_conformity }}</td>
						<td>{{ $pedido->no_conformidad_de_submision_de_ppaps }}</td>
						<td>{{ $pedido->imds_submission }}</td>

						<td align="center">
							<a class="btn btn-info" href="">VER</a>
							</br>
							<a class="btn btn-info" href="">EDITAR</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>		
		</div>
		
	</div>
</div>	
@endsection