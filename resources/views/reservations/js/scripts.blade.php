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
		$(".dot").click(function(){
		    $(this).css('background-color', 'grey');
		    var valueCell = $(this).html();
		    arr.push(valueCell);
		});
	});
	function test() {
		$('#tables').hide();
		$('#seats').show();
		alert(document.getElementById("myTable").rows[0].cells[0].innerHTML);
		var name = $('#nombre').html();
		var origin = $('#origen').html();
		var destiny = $('#destino').html();
		var price = $('#precio').html();
		var schedule = $('#horario').html();
		$('#priceTitle').html("Precio: "+price);
		$('#destinyTitle').html("Destino: "+schedule);
		$('#scheduleTitle').html("Horario: "+destiny);
	}

</script>
