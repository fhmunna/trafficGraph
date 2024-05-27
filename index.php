<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<title>Traffic Monitor</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/plotly.js/1.33.1/plotly.js"></script>
</head>
<body>
<div id="chart">
	

</div>


<script type="text/javascript">
	Plotly.plot('chart',[{
		y:[getData()],
		type:'line'
	}]);
	function getData(){
		return Math.random();
	}


	setInterval(function(){
		Plotly.extendTraces('chart',{
		y:[[getData()]]},[0])

		

	},200);
</script>
</body>
</html>

