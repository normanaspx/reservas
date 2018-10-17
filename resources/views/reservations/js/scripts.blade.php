<style media="screen">
.dot {
	height: 50px;
	width: 50px;
	background-color: green;
	display: inline-block;
	cursor: pointer;
}
/*#dos{
	display: none;
}*/
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('#seats').hide();
		$(".dot").click(function(){
		    $(this).css('background-color', 'grey');
		});
	});
	function test() {
		$('#tables').hide();
		$('#seats').show();
	}

</script>
