<div class="col col-sm-12 col-md-12 text-left" id="xd">
	<table class="table">
		<thead>
			<tr>
				<th>Servicio</th>
				<th>Horario</th>
				<th>Precio</th>
				<th>Asientos</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td id="service"></td>
				<td id="schedule"></td>
				<td id="price"></td>
				<td id="asientos"></td>
				<td id="total"></td>
			</tr>
		</tbody>
	</table>
	<form class="" action="{{url('/reservation.create')}}" method="post">
		{{ csrf_field() }}
		<input id="user"  type="hidden" readonly  value="{{ Auth::user()->name }}" class="form-control">
		<input id="id_user"  type="hidden" readonly  value="{{ Auth::user()->id }}" class="form-control">
		<input id="id_ser" type="hidden" readonly  value="" class="form-control">
		<input id="service" type="hidden" name="" value="" class="form-control">
		<input id="schedule" type="hidden" name="" value="" class="form-control">
		<input id="price" type="hidden" name="" value="" class="form-control">
		<input id="asientos" type="hidden" name="" value="" class="form-control">
		<input id="total" type="hidden" name="" value="" class="form-control"><br>
		<button type="button" onclick="save()" class="btn btn-block btn-success">Confirmar</button>

	</form>
</div>
