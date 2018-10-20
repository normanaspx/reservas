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
	var arr=[], state=true;
	$(document).ready(function(){
		$('#seats').hide();
		$('#header').hide();
		$(".dot").click(function(){
		    $(this).css('background-color', 'grey');
		    var valueCell = $(this).html();
		    arr.push(valueCell);
		});
	});
	function myFunction(x) {
	    //alert("Cell index is: " + x.rowIndex);
	    $("#tables").fadeOut();
	    //$('#tables').hide();
	    $('#seats').show();
	    $('#header').show();
	    var a = document.getElementById("especial").rows[x.rowIndex].cells[3];
	    var schedule = a.innerHTML;
	    var origin  = document.getElementById("especial").rows[x.rowIndex].cells[5].innerHTML;
	    var price  = document.getElementById("especial").rows[x.rowIndex].cells[4].innerHTML;
	    $('#priceTitle').html("Precio: "+price);
	    $('#destinyTitle').html("Destino: "+origin);
	    $('#scheduleTitle').html("Horario: "+schedule);
	}
</script>
