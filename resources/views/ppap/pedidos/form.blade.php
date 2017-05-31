

		{!! Form::open(['url' => $url, 'method' => $method, 'files' => true]) !!}
	
			<div class="form-group">
			{{ Form::text('customer_group',$pedidos->customer_group,['class'=>'form-control','placeholder'=>'Customer Group']) }}
			</div>

			<div class="form-group">
			{{ Form::text('customer',$pedidos->customer,['class'=>'form-control','placeholder'=>'Customer']) }}
			</div>

			<div class="form-group">
			{{ Form::text('contact_name',$pedidos->contact_name,['class'=>'form-control','placeholder'=>'Contact Name']) }}
			</div>

			<div class="form-group">
			{{ Form::text('lf_coordinator',$pedidos->lf_coordinator,['class'=>'form-control','placeholder'=>'LF Coordinator']) }}
			</div>

			<div class="form-group">
			{{ Form::text('customer_part_number',$pedidos->customer_part_number,['class'=>'form-control','placeholder'=>'Customer Part Number']) }}
			</div>

			<div class="form-group">
			{{ Form::text('lf_part_number',$pedidos->lf_part_number,['class'=>'form-control','placeholder'=>'LF Part Number']) }}
			</div>

			<div class="form-group">
			{{ Form::text('group',$pedidos->group,['class'=>'form-control','placeholder'=>'Group']) }}
			</div>

			<div class="form-group">
			{{ Form::text('note_oem_part_number',$pedidos->note_oem_part_number,['class'=>'form-control','placeholder'=>'Note Oem Part Number']) }}
			</div>

			<div class="form-group">
			{{ Form::text('level_request',$pedidos->level_request,['class'=>'form-control','placeholder'=>'Level Request']) }}
			</div>

			<div class="form-group">
			{{ Form::text('type_of_request',$pedidos->type_of_request,['class'=>'form-control','placeholder'=>'Type of Request']) }}
			</div>

			<div class="form-group">
			{{ Form::text('etr',$pedidos->etr,['class'=>'form-control','placeholder'=>'ETR']) }}
			</div>

			<div class="form-group ">
			{{ Form::text('date_request',$pedidos->date_request,['class'=>'form-control','placeholder'=>'Date Request']) }}
			</div>

			<div class="form-group">
			{{ Form::text('customer_due_date',$pedidos->customer_due_date,['class'=>'form-control','placeholder'=>'Customer Due Date']) }}
			</div>

			<div class="form-group">
			{{ Form::text('lf_due_date',$pedidos->lf_due_date,['class'=>'form-control','placeholder'=>'LF Due Date']) }}
			</div>

			<div class="form-group">
			{{ Form::text('submited_date',$pedidos->submited_date,['class'=>'form-control','placeholder'=>'Submited Date']) }}
			</div>

			<div class="form-group">
			{{ Form::text('full_interim_submission',$pedidos->full_interim_submission,['class'=>'form-control','placeholder'=>'Full Interim Submission']) }}
			</div>

			<div class="form-group">
			{{ Form::text('day_submitted',$pedidos->day_submitted,['class'=>'form-control','placeholder'=>'Day Submitted']) }}
			</div>

			<div class="form-group">
			{{ Form::text('why_open',$pedidos->why_open,['class'=>'form-control','placeholder'=>'Why Open']) }}
			</div>

			<div class="form-group">
			{{ Form::text('pass_due_vs_lf_due_date',$pedidos->pass_due_vs_lf_due_date,['class'=>'form-control','placeholder'=>'Pass Due vs LF Due Date']) }}
			</div>

			<div class="form-group">
			{{ Form::text('time_to_response',$pedidos->time_to_response,['class'=>'form-control','placeholder'=>'Time To Response']) }}
			</div>

			<div class="form-group">
			{{ Form::text('comments',$pedidos->comments,['class'=>'form-control','placeholder'=>'Comments']) }}
			</div>

			<div class="form-group">
			{{ Form::text('approval_date',$pedidos->approval_date,['class'=>'form-control','placeholder'=>'Approval Date']) }}
			</div>

			<div class="form-group">
			{{ Form::text('type_of_no_conformity',$pedidos->type_of_no_conformity,['class'=>'form-control','placeholder'=>'Type Of No Conformity']) }}
			</div>

			<div class="form-group">
			{{ Form::text('no_conformidad_de_submision_de_ppaps',$pedidos->no_conformidad_de_submision_de_ppaps,['class'=>'form-control','placeholder'=>'No Conformidad de Submision de PPAPS']) }}
			</div>

			<div class="form-group">
			{{ Form::text('imds_submission',$pedidos->imds_submission,['class'=>'form-control','placeholder'=>'IMDS Submission']) }}
			</div>

			

			<div class="form-group text-right">
				<a href="{{url('/ppap/pedidos')}}">Regresar al listado de productos</a>
				<input type="submit" value="Enviar" class="btn btn-success"></input>
			</div>

		{!! Form::close() !!}



