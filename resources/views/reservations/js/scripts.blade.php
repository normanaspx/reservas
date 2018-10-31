<style media="screen">
.dot {
	height: 50px;
	width: 50px;
	background-color: #02C03C;
	display: inline-block;
	cursor: pointer;
	text-align: center;
	color: white;
	vertical-align:middle !important;
	padding-top: 13px;
	border-radius: 3px;
	box-shadow: 3px 3px black;
}
.circle {
	height: 25px;
	width: 25px;
	border-radius: 50%;
	display: block;
	margin-left: 20px;
	margin-right: 5px;
	float: left;
}
.mybtn{
	float: left;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script type="text/javascript">
	var arr=[];
	var price, schedule, total, destiny;
	$(document).ready(function(){
		$('#seats').hide();
		$('#header').hide();
		$('#resume').hide();
		$(".dot").click(function(){
			var color=$(this).css('background-color');
			if(color=='rgb(2, 192, 60)'){
				$(this).css('background-color', 'grey');
				var valueCell = $(this).html();
				arr.push(valueCell);
				total=arr.length*price;
				console.log(total);
			}else{
				$(this).css('background-color', 'rgb(2, 192, 60)');
				var valueCell = $(this).html();
				for (var i = 0; i < arr.length; i++) {
					if(arr[i]==valueCell){
						arr.splice(i, 1);
						total=arr.length*price;
						console.log(total);
					}
				}
			}
		});
	});
	function myFunction(x) {
	    $("#tables").fadeOut();
	    //$('#tables').hide();
	    $('#seats').show();
	    $('#header').show();
	    var a = document.getElementById("especial").rows[x.rowIndex].cells[3];
	    schedule = a.innerHTML;
	    destiny  = document.getElementById("especial").rows[x.rowIndex].cells[5].innerHTML;
	    price  = document.getElementById("especial").rows[x.rowIndex].cells[4].innerHTML;
	    id  = document.getElementById("especial").rows[x.rowIndex].cells[0].innerHTML;
	    service  = document.getElementById("especial").rows[x.rowIndex].cells[1].innerHTML;
	    $('#priceTitle').html("Precio: Q"+price);
	    $('#destinyTitle').html("Destino: "+destiny);
	    $('#id_ser').val(id);
	    //$('#service').val(service);

	    document.getElementById('service').innerHTML=service;
	    $('#id_ser').html(id);
	    $('#service').html(service);

	}
	function myFunction1(x) {
	    $("#tables").fadeOut();
	    //$('#tables').hide();
	    $('#seats').show();
	    $('#header').show();
	    var a = document.getElementById("regular").rows[x.rowIndex].cells[3];
	    schedule = a.innerHTML;
	    destiny  = document.getElementById("regular").rows[x.rowIndex].cells[5].innerHTML;
	    price  = document.getElementById("regular").rows[x.rowIndex].cells[4].innerHTML;
	    id  = document.getElementById("regular").rows[x.rowIndex].cells[0].innerHTML;
	    service  = document.getElementById("regular").rows[x.rowIndex].cells[1].innerHTML;
	    $('#priceTitle').html("Precio: Q"+price);
	    $('#destinyTitle').html("Destino: "+destiny);
	    $('#id_ser').val(id);
	    //$('#service').val(service);

	    document.getElementById('service').innerHTML=service;
	    $('#id_ser').html(id);
	    $('#service').html(service);

	}
	function resume(){
		$('#seats').fadeOut();
		$('#header').fadeOut();
		$('#resume').fadeIn();
		$('#price').val("Precio: Q"+price);
		$('#destiny').val("Destino: "+destiny);
		$('#schedule').val("Horario: "+schedule);
		$('#asientos').val("Asientos: "+arr);
		$('#total').val("Total: Q"+total);

		$('#resume-title').fadeIn();
		$('#resumetitle').html('Resumen');

		$('#price').html("Q"+price);
		$('#destiny').html(destiny);
		$('#schedule').html(schedule);
		$('#asientos').html(arr+" ");
		$('#total').html("Q"+total);

	}
	function save(){
	   if(arr.length!=0){
		   const arrdata = {
			  _token: "{{ csrf_token() }}",
			  id:  $('#id_user').val(),
			  id_servicio:  $('#id_ser').val(),
			  asientos: arr
		   };
		   jQuery.ajax({
			  url: "{{ route('reservation.create') }}",
			  type: 'POST',
			  data: arrdata,
			  success: function(result){
				  var doc = new jsPDF()
				  doc.setFontSize(22);
				  doc.text(20, 20, 'Detalle de reserva');
				  doc.setLineWidth(0.5);
				  doc.line(20, 25, 150, 25);
				  doc.setFontSize(16);
				  var a = $('#user').val();
				  doc.text(20, 40, 'Nombre: '+a);
				  var specialElementHandlers = {
				  	'#editor': function(element, renderer){
				  		return true;
				  	},
				  	'.controls': function(element, renderer){
				  		return true;
				  	}
				  };
				  doc.fromHTML($('#xd').get(0), 15, 40, {
				  	'width': 170,
				  	'elementHandlers': specialElementHandlers
				  });
				  doc.save('boleta-bus.pdf');
				  document.location.href="{{route('create')}}";

			  },
			  error: function(jqXHR, textStatus, errorThrown) {
				 alert('Lo Sentimos, no ha sido posible crear la reserva.');
			  }
		   });
	   }else{
		   alert('Debe asignar un asiento por lo menor');
	   }
   }
</script>
