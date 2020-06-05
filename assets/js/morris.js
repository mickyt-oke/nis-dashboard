$(function() {
	'use strict';

	/*---Graph1 ----*/
	var nReloads = 0;

	function data(offset) {
		var ret = [];
		for (var x = 0; x <= 360; x += 10) {
			var v = (offset + x) % 360;
			ret.push({
				x: x,
				y: Math.sin(Math.PI * v / 120).toFixed(4),
				z: Math.cos(Math.PI * v / 180).toFixed(3)
			});
		}
		return ret;
	}
	var graph = Morris.Line({
		element: 'graph',
		data: data(0),
		xkey: 'x',
		ykeys: ['y', 'z'],
		labels: ['Male', 'Female'],
		parseTime: false,
		ymin: -1.0,
		ymax: 1.0,
		hideHover: true,
		lineColors: ['#00c3ed', '#ffa21d']
	});

	function update() {
		nReloads++;
		graph.setData(data(5 * nReloads));
		$('#reloadStatus').text(nReloads + ' reloads');
	}
	setInterval(update, 100);

	/*---Graph2 ----*/
	var day_data = [{
		"sales": "Jan",
		"value": 34
	}, {
		"sales": "feb",
		"value": 24
	}, {
		"sales": "Mar",
		"value": 3
	}, {
		"sales": "Apr",
		"value": 12
	}, {
		"sales": "May",
		"value": 13
	}, {
		"sales": "Jun",
		"value": 22
	}, {
		"sales": "Jul",
		"value": 5
	}, {
		"sales": "Aug",
		"value": 26
	}, {
		"sales": "Sep",
		"value": 12
	}, {
		"sales": "Oct",
		"value": 19
	}];
	Morris.Line({
		element: 'graph2',
		data: day_data,
		xkey: 'sales',
		ykeys: ['value'],
		labels: ['value'],
		parseTime: false,
		lineColors: ['#00c3ed', '#ffa21d']
	});

	/*---Graph3 ----*/
	var decimal_data = [];
	for (var x = 0; x <= 360; x += 10) {
		decimal_data.push({
			x: x,
			y: 1.5 + 1.5 * Math.sin(Math.PI * x / 180).toFixed(4)
		});
	}
	window.m = Morris.Line({
		element: 'graph3',
		data: decimal_data,
		xkey: 'x',
		ykeys: ['y'],
		labels: ['sales'],
		parseTime: false,
		lineColors: ['#00c3ed', '#ffa21d'],
		hoverCallback: function(index, options, default_content, row) {
			return default_content.replace("sales", "profit");
		},
		xLabelMargin: 10,
		integerYLabels: true
	});

	/*---Graph4 ----*/
	Morris.Area({
		element: 'graph4',
		data: [{
			x: '2013-03-30 22:00:00',
			y: 3,
			z: 3
		}, {
			x: '2013-03-31 00:00:00',
			y: 2,
			z: 0
		}, {
			x: '2013-03-31 02:00:00',
			y: 0,
			z: 2
		}, {
			x: '2013-03-31 04:00:00',
			y: 4,
			z: 4
		}],
		xkey: 'x',
		ykeys: ['y', 'z'],
		labels: ['Y', 'Z'],
		lineColors: ['#00c3ed', '#ffa21d']
	});

	/*---Graph5 ----*/
	Morris.Bar({
		element: 'graph5',
		data: [{
			x: '2011 Q1',
			y: 3407,
			z: 2660
		}, {
			x: '2011 Q2',
			y: 3351,
			z: 3629
		}, {
			x: '2011 Q3',
			y: 3269,
			z: 2618
		}, {
			x: '2011 Q4',
			y: 3246,
			z: 1661
		}, {
			x: '2011 Q5',
			y: 3517,
			z: 2660
		}, {
			x: '2011 Q6',
			y: 3051,
			z: 2620
		}, {
			x: '2011 Q7',
			y: 3239,
			z: 3618
		}, {
			x: '2011 Q8',
			y: 3276,
			z: 2661
		}],
		xkey: 'x',
		ykeys: ['y', 'z'],
		labels: ['Y', 'Z'],
		barColors: ['#00c3ed', '#ffa21d']
	});

	/*---Graph6 ----*/
	Morris.Donut({
		element: 'graph6',
		data: [{
			value: 35,
			label: 'USA'
		}, {
			value: 30,
			label: 'IND'
		}, {
			value: 20,
			label: 'GER'
		}, {
			value: 15,
			label: 'NA'
		}],
		backgroundColor: '#fff',
		colors: ['#00c3ed', ' #081340 ', '#ffa21d', '#f94920'],
		formatter: function(x) {
			return x + "%"
		}
	});
});