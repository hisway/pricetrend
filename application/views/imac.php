<!DOCTYPE HTML>
<html>

<head>  
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

	<script type="text/javascript">
	window.onload = function () {
    CanvasJS.addCultureInfo("cn", 
    {                   
      zoomText:"放大",
      panText:"拖动",
      resetText:"重置",
    });
    
	var url  = 'data/index/imac/0';
	$.ajax({
	    type : "GET",
	    url  : url,
	    dataType : "json",
	    success: function(items) {
	      	var chart1 = new CanvasJS.Chart("chartContainer1",
		    {      
				culture: "cn",
				zoomEnabled:true,
				//backgroundColor: "#185385",
				title:{
					text: "Macbook Air Retina  港版价格走势图",
					fontColor:"#185385",
				},
				toolTip: {
					shared: true,
				},
				axisX:{      
					valueFormatString: "YYYY-MM-DD HH:mm" ,
				},
				axisY: {
					valueFormatString: "#,###",
					includeZero: false,
					prefix: "¥",    
				},
				legend: {
					verticalAlign: "bottom", 
					horizontalAlign: "right",
					fontWeight: "bold",
					fontSize: 15,
		      	},
		      	data: [
					{        
					type: "spline",
					color:"#99CC33",
					lineThickness: 3,
					showInLegend: true,
					name: "ME086",
					markerSize: 0,
					xValueType: "dateTime",
					dataPoints: items['ME086']
					},
					{        
					type: "spline",
					color:"#9900FF",
					lineThickness: 3,
					showInLegend: true,
					name: "ME087",
					markerSize: 0,
					xValueType: "dateTime",
					dataPoints: items['ME087']
					},
					{        
					type: "spline",
					color:"#808080",
					lineThickness: 3,
					showInLegend: true,
					name: "ME088",
					markerSize: 0,
					xValueType: "dateTime",
					dataPoints: items['ME088']
					},
					{        
					type: "spline",
					color:"#FFD700",
					lineThickness: 3,
					showInLegend: true,
					name: "ME089",
					markerSize: 0,
					xValueType: "dateTime",
					dataPoints: items['ME089']
					},
		      	]
		    });
			chart1.render();
	    }//SUCCESS
	});//AJAX



	




    

}


</script>
<script type="text/javascript" src="./canvasjs.min.js"></script>
<title>Apple 产品港版价格走势-iMac</title>
<link rel="stylesheet" href="./style.css" media="screen" type="text/css" />
<link href="./font-awesome.css" rel="stylesheet">
</head>
<body>
	<ul id="breadcrumb">
		<li><a href="<?php echo base_url() ?>"><span class="icon icon-home"></span></a></li>
		<li><a href="add"><span class="icon "> </span>添加报价</a></li>
		<li><a href="iphone5s"><span class="icon icon-apple"></span> iphone 5s</a></li>
		<li><a href="iphone5c"><span class="icon icon-apple"></span> iphone 5c</a></li>
		<li><a href="ipadair"><span class="icon icon-apple"></span> iPad Air</a></li>
		<li><a href="ipadminiretina"><span class="icon icon-apple"></span> iPad Mini Retina</a></li>
		<li><a href="ipadmini"><span class="icon icon-apple"></span> iPad Mini</a></li>
		<li><a href="rmbp"><span class="icon icon-apple"></span> Macbook Pro Retina</a></li>
		<li><a href="rmba"><span class="icon icon-apple"></span> Macbook Air Retina</a></li>
		<li><a href="imac"><span class="icon icon-apple"></span> iMac</a></li>
		<li><a href="macmini"><span class="icon icon-apple"></span> Mac Mini</a></li>
	</ul>
	
	<div id="chartContainer1" style="height: 300px; width: 100%;">
	</div>




