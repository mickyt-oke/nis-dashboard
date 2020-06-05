$(function(e) {
	'use strict';
	var ctx = document.getElementById("Chart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Sun", "Mon", "Tus", "Wed", "Thu", "Fri", "Sat"],
			datasets: [{
				label: 'Views',
				data: [20, 420, 210, 354, 580, 320, 480],
				borderWidth: 2,
				backgroundColor: 'transparent',
				borderColor: '#00c3ed',
				borderWidth: 4,
				pointBackgroundColor: '#ffffff',
				pointRadius: 8
			}]
		},
		options: {
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						color: 'rgba(0,0,0,0.061)'
					}
				}],
				yAxes: [{
					display: false,
					gridLines: {
						color: 'rgba(0,0,0,0.061)'
					}
				}]
			},
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			tooltips: {},
			hover: {
				mode: 'nearest',
				intersect: true
			}
		}
	});
	var data = [],
		totalPoints = 1000;

	function getRandomData() {
		if (data.length > 0) data = data.slice(1);
		// Do a random walk
		while (data.length < totalPoints) {
			var prev = data.length > 0 ? data[data.length - 1] : 50,
				y = prev + Math.random() * 10 - 5;
			if (y < 0) {
				y = 0;
			} else if (y > 100) {
				y = 100;
			}
			data.push(y);
		}
		var res = [];
		for (var i = 0; i < data.length; ++i) {
			res.push([i, data[i]])
		}
		return res;
	}
	var updateInterval = 30;
	$("#updateInterval").val(updateInterval).change(function() {
		var v = $(this).val();
		if (v && !isNaN(+v)) {
			updateInterval = +v;
			if (updateInterval < 1) {
				updateInterval = 1;
			} else if (updateInterval > 2000) {
				updateInterval = 2000;
			}
			$(this).val("" + updateInterval);
		}
	});
	var plot = $.plot("#placeholder02", [getRandomData()], {
		series: {
			shadowSize: 0 // Drawing is faster without shadows
		},
		colors: ["#00c3ed"],
		grid: {
			borderColor: '#fff'
		},
		yaxis: {
			min: 0,
			max: 100,
			tickLength: 0
		},
		xaxis: {
			show: false
		}
	});

	function update() {
		plot.setData([getRandomData()]);
		plot.draw();
		setTimeout(update, updateInterval);
	}
	update();
	/*----Hightchat7-----*/
	Highcharts.chart('Highchart7', {
		chart: {
			type: 'column'
		},
		title: {
			text: ''
		},
		exporting: {
			enabled: false
		},
		credits: {
			enabled: false
		},
		xAxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		},
		yAxis: [{
			className: 'highcharts-color-0',
			title: {
				text: 'Unsubscribe'
			}
		}, {
			className: 'highcharts-color-1',
			opposite: true,
			title: {
				text: 'Subscribe'
			}
		}],
		plotOptions: {
			column: {
				borderRadius: 5
			}
		},
		series: [{
			name: 'Unsubscribe',
			data: [1, 3, 2, 4, 6, 2, 5, 5],
			color: '#ffa21d'
		}, {
			name: 'Subscribe',
			data: [324, 124, 547, 221, 335, 625, 325, 214],
			color: '#00c3ed',
			yAxis: 1
		}]
	});
	/*----Hightchat8-----*/
	Highcharts.chart('Highchart8', {
		title: {
			text: ''
		},
		exporting: {
			enabled: false
		},
		credits: {
			enabled: false
		},
		xAxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		},
		series: [{
			type: 'pie',
			name: 'Page Visits',
			allowPointSelect: true,
			keys: ['name', 'y', 'selected', 'sliced'],
			data: [
				['Jan', 99.9, false],
				['Feb', 71.5, false],
				['Mar', 106.4, false],
				['Apr', 129.2, false],
				['May', 144.0, false],
				['Jun', 176.0, false],
				['Jul', 135.6, true, true],
				['Aug', 148.5, false]
			],
			colors: ['#00758e', ' #009cbd', '#00c3ed', '#32cff0', '#66dbf4', '#99e7f7', '#ccf3fb',  '#029cbd'],
			showInLegend: true
		}]
	});
});