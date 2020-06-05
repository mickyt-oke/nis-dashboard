$(function(e) {
	'use strict';
	/*----Hightchat3
	Highcharts.chart('Highchart3', {
		chart: {
			type: 'bar'
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
		xAxis: {
			categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
			title: {
				text: null
			}
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Earnings',
				align: 'high'
			},
			labels: {
				overflow: 'justify'
			}
		},
		tooltip: {
			valueSuffix: ' millions'
		},
		plotOptions: {
			bar: {
				dataLabels: {
					enabled: true
				}
			}
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'top',
			x: -40,
			y: 80,
			floating: true,
			borderWidth: 1,
			backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
			shadow: true
		},
		credits: {
			enabled: false
		},
		series: [{
			name: 'Year 1800',
			data: [107, 31, 635, 203, 2],
			color: '#2bcbba'
		}, {
			name: 'Year 1900',
			data: [133, 156, 947, 408, 6],
			color: '#ff5c75'
		}, {
			name: 'Year 2000',
			data: [814, 841, 3714, 727, 31],
			color: '#ffa21d'
		}, {
			name: 'Year 2016',
			data: [1216, 1001, 4436, 738, 40],
			color: '#00c3ed'
		}]
	});

	/*----Hightchat4
	Highcharts.chart('Highchart4', {
		chart: {
			type: 'line'
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
		subtitle: {
			text: ''
		},
		xAxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		},
		yAxis: {
			title: {
				text: 'Temperature (°C)'
			}
		},
		plotOptions: {
			line: {
				dataLabels: {
					enabled: true
				},
				enableMouseTracking: false
			}
		},
		series: [{
			name: 'Tokyo',
			data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
			color: '#ffa21d'
		}, {
			name: 'London',
			data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8],
			color: '#00c3ed'
		}]
	});
    
	
	/*----Hightchat7
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
		yAxis: [{
			className: 'highcharts-color-0',
			title: {
				text: 'Primary axis'
			}
		}, {
			className: 'highcharts-color-1',
			opposite: true,
			title: {
				text: 'Secondary axis'
			}
		}],
		plotOptions: {
			column: {
				borderRadius: 5
			}
		},
		series: [{
			data: [1, 3, 2, 4],
			color: '#ffa21d'
		}, {
			data: [324, 124, 547, 221],
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
			allowPointSelect: true,
			keys: ['name', 'y', 'selected', 'sliced'],
			data: [
				['Africa', 14.14, false],
				['Americas', 20.1, false],
				['Asia', 18.0, false],
				['Europe', 46.83, false],
				['Oceania', 4.0, false]
			],
			colors: [' #0b1e70 ', '#ffa21d', '#ed2a00', '#004ced', '#ed00c3'],
			showInLegend: true
		}]
	});
});