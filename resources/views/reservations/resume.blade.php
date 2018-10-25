<div class="col col-sm-12 col-md-12 text-left">
	<form class="" action="{{url('/reservation.create')}}" method="post">
		{{ csrf_field() }}
			<input id="id_user"  type="hidden" readonly  value="{{ Auth::user()->id }}" class="form-control">
			<input id="id_ser" type="hidden" readonly  value="" class="form-control">
			<input id="service" type="text" name="" value="" class="form-control">
			<input id="schedule" type="text" name="" value="" class="form-control">
			<input id="price" type="text" name="" value="" class="form-control">
			<input id="asientos" type="text" name="" value="" class="form-control">
			<input id="total" type="text" name="" value="" class="form-control"><br>
		<button type="button" onclick="save()" class="btn btn-success">Confirmar</button>
	</form>
</div>
