@extends('layout')

@section('title')
H2 Micro Time Track
@stop

@section('background_image')
	images/bg.jpg
@stop

@section('body')
<div id='topbox'>
	<center>
		<img src="images/H2Micro.png" width="300">
	</center>
</div>

<div id='mainbox'>
	<div class='introHeader'>
		Affordability With No Sacrifices.
		<hr>
	</div>
	<div class='introText'>
		Time Track is a tool designed to help employers keep track of their employee's hours worked. Our simple tools make the system fast and easy to use while still maintaining the power of traditional products. Not only this but all computation is done on the H2 Micro servers making the experience more feel more fluid for users. 
		<br>
		<br>
		We have made sure to sacrifice nothing to bring you our software at an affordable price.
	</div>
</div>

<hr>

<div id='buybox'>
	<div class='header'>
			Powerful Analysis Tools
	</div>
	<br>
<center>
	<canvas id="mycanvas" width="800" height="100"></canvas>
</center>

<br>
	<div class="header">
	Custom Cloud Hosting
	</div>
	<br>
	<div class="body">
	Not only are we offering our software for free, but if you have under 10 employees we are offering free hosting on our cloud servers! Of course, if you have your own servers you can host your own database and use our software for 100% free, regardless of the size of your organization.
	</div>
	<br>
	<div class="header">
	Our pricing scheme
	</div>
	<br>
	<div class="body">
	We have decided that core of the software will be 100% free for everybody. However due to the fact that it is 2014 and cloud hosting is part of all modern applications. If your organization has under 25 employees we wil host all of your time sheet data for free on our servers! If you have more than 25 employees we can either host your data for a small price, or you can host it yourself.
	</div>

</div>
@stop

@section('scripts_footer')
	var smoothie = new SmoothieChart();
	smoothie.streamTo(document.getElementById("mycanvas"), 1000);

	var line1 = new TimeSeries();

	setInterval(function(){
		line1.append(new Date().getTime(), Math.random());
	}, 1000);

	smoothie.addTimeSeries(line1,
	 { strokeStyle:'rgb(0, 255, 0)', fillStyle:'rgba(0, 255, 0, 0.4)', lineWidth:3 });
@stop
