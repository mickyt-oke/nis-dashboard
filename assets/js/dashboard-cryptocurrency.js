$(function(e) {
	'use strict';
	/*----Hightchat5-----*/
	function getData(n) {
		var arr = [],
			i,
			x,
			a,
			b,
			c,
			spike;
		for (i = 0, x = Date.UTC(new Date().getUTCFullYear(), 0, 1) - n * 2018; i < n; i = i + 1, x = x + 2018) {
			if (i % 100 === 0) {
				a = 2 * Math.random();
			}
			if (i % 1000 === 0) {
				b = 2 * Math.random();
			}
			if (i % 10000 === 0) {
				c = 2 * Math.random();
			}
			if (i % 50000 === 0) {
				spike = 5;
			} else {
				spike = 0;
			}
			arr.push([
				x,
				2 * Math.sin(i / 100) + a + b + c + spike + Math.random()
			]);
		}
		return arr;
	}
	var n = 500000,
		data = getData(n);
	console.time('line');
	Highcharts.chart('Highchart5', {
		chart: {
			zoomType: 'x'
		},
		title: {
			text: ''
		},
		subtitle: {
			text: ''
		},
		exporting: {
			enabled: false
		},
		credits: {
			enabled: false
		},
		tooltip: {
			valueDecimals: 5
		},
		xAxis: {
			type: 'datetime'
		},
		series: [{
			data: data,
			lineWidth: 0.5,
			color: '#00c3ed',
			name: 'Hourly position Value'
		}]
	});
	/*----Hightchat6-----*/
	Highcharts.chart('Highchart6', {
		chart: {
			zoomType: 'xy'
		},
		title: {
			text: ''
		},
		subtitle: {
			text: ''
		},
		exporting: {
			enabled: false
		},
		credits: {
			enabled: false
		},
		xAxis: [{
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			crosshair: true
		}],
		yAxis: [{ // Primary yAxis
			labels: {
				format: '${value}B',
				style: {
					color: Highcharts.getOptions().colors[1]
				}
			},
			title: {
				text: 'Price',
				style: {
					color: Highcharts.getOptions().colors[1]
				}
			}
		}, { // Secondary yAxis
			title: {
				text: 'Marketcap',
				style: {
					color: Highcharts.getOptions().colors[0]
				}
			},
			labels: {
				format: '{value} $',
				style: {
					color: Highcharts.getOptions().colors[0]
				}
			},
			opposite: true
		}],
		tooltip: {
			shared: true
		},
		legend: {
			layout: 'vertical',
			align: 'left',
			x: 120,
			verticalAlign: 'top',
			y: 100,
			floating: true,
			backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || 'rgba(255,255,255,0.25)'
		},
		series: [{
			name: 'Marketcap',
			type: 'column',
			yAxis: 1,
			data: [25620, 36245, 45263, 32564, 56975, 46528, 62354, 56234, 56328, 75896, 45268, 56245],
			color: '#00c3ed',
			tooltip: {
				valueSuffix: ' $'
			}
		}, {
			name: 'price',
			type: 'spline',
			data: [20000, 18000, 32650, 16235, 36251, 28632, 52632, 43256, 45638, 45623, 25632, 35624],
			color: '#ffa21d',
			tooltip: {
				valueSuffix: '$'
			}
		}]
	});
});