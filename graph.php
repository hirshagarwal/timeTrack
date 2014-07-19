<html>
<script type="text/javascript" src="js/smoothie.js"></script>
<canvas id="mycanvas" width="500" height="100"></canvas>

<script type="text/javascript">

//Setup and display canvas

	var smoothie = new SmoothieChart();
	smoothie.streamTo(document.getElementById("mycanvas"), 1000);

	var line1 = new TimeSeries();

	setInterval(function(){
		line1.append(new Date().getTime(), Math.random());
	}, 1000);

	smoothie.addTimeSeries(line1,
	 { strokeStyle:'rgb(0, 255, 0)', fillStyle:'rgba(0, 255, 0, 0.4)', lineWidth:3 });


</script>

</html>