<canvas id="myChart" width="800" height="300"></canvas>
<div id="container" style="min-width:800px;height:400px"></div>

<script src="./Chart.js-master/Chart.js"></script>
<script type="text/javascript" src="./Js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="./Js/highcharts.js"></script>
<script type="text/javascript" src="./Js/exporting.js"></script>
<script>
var data = {

             labels : [<?php echo $x?>],
             datasets : [
                     {
                             fillColor : "rgba(220,20,220,0.5)",
                             strokeColor : "rgba(220,20,220,1)",
                             data : [<?php echo $y?>]
                     }
             ]
     }
var ctx = document.getElementById("myChart").getContext("2d"); 
var myNewChart = new Chart(ctx).Bar(data);//new Chart(ctx).PolarArea(data);
//曲线
$(function () {
	    $('#container').highcharts({
	        title: {
	            text: '曲线图',
	            x: -20 //center
	        },
	        exporting :{
	        	url:'export/index.php',
	        	width:800
	        },
	        subtitle: {
	            text: 'Source: WorldClimate.com',
	            x: -20
	        },
	        xAxis: {
	            categories: [<?php echo $x?>]
	        },
	        yAxis: {
	            title: {
	                text: '最近几天 (次)'
	            },
	            plotLines: [{
	                value: 0,
	                width: 1,
	                color: '#808080'
	            }]
	        },
	        tooltip: {
	            valueSuffix: '次'
	        },
	        legend: {
	            layout: 'vertical',
	            align: 'right',
	            verticalAlign: 'middle',
	            borderWidth: 0
	        },
	        series: [{
	            name: 'BBS四大天王',
	            data: [<?php echo $y?>]
	        },]
	    });
            
});
//饼图

</script>