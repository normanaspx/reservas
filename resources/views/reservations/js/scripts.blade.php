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
	    $('#priceTitle').html("Precio: Q"+price);
	    $('#destinyTitle').html("Destino: "+destiny);
	    $('#scheduleTitle').html("Horario: "+schedule);
	}
	function resume(){
		$('#seats').fadeOut();
		$('#header').fadeOut();
		$('#resume').fadeIn();
		$('#price').html("Precio: Q"+price);
		$('#destiny').html("Destino: "+destiny);
		$('#schedule').html("Horario: "+schedule);
		$('#asientos').html("Asientos: "+arr);
		$('#total').html("Total: Q"+total);
		$('#resume-title').fadeIn();
		$('#resumetitle').html('Resumen');
	}
</script>
