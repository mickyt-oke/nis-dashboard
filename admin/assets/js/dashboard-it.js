$(function(e) {
	"use strict";
	//line chart
	var ctx = document.getElementById("lineChart");
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Africa", "Asia", "America", "Europe", "Oceania", ],
			datasets: [{
				label: "Visa",
				borderColor: "#b39605",
				backgroundColor: "#b39605",
				data: [21436, 33801, 9682, 50630, 651]
			}, {
				label: "Passport",
				borderColor: "#2bde07",
				backgroundColor: "#2bde07",
				pointHighlightStroke: "rgba(255, 255, 255, 0.1)",
				data: [21266, 20612, 51157, 90808, 1941]
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
					display: true,
					gridLines: {
						display: false,
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
});
/*--echart5---*/
var myChart5 = echarts.init(document.getElementById('echart5'));
var dataAxis = ['01-10-18', '08-10-18', '15-10-18', '22-10-18', '29-10-18', '03-11-18', '10-11-18', '18-11-18', '26-11-18', '01-12-18'];
var data = [220, 182, 191, 234, 290, 330, 310, 123, 442, 321];
var yMax = 500;
var dataShadow = [];
for (var i = 0; i < data.length; i++) {
	dataShadow.push(yMax);
}
option5 = {
	title: {
		text: '',
		subtext: ''
	},
	tooltip: {},
	xAxis: {
		data: dataAxis,
		axisLabel: {
			outside: true,
			textStyle: {
				color: '#333'
			}
		},
		axisTick: {
			show: false
		},
		axisLine: {
			show: false
		},
		z: 10
	},
	yAxis: {
		axisLine: {
			show: false
		},
		axisTick: {
			show: false
		},
		axisLabel: {
			textStyle: {
				color: '#999'
			}
		}
	},
	grid: {
		x: 40,
		y: 20,
		x2: 40,
	},
	dataZoom: [{
		type: 'inside'
	}],
	series: [{ // For shadow
		type: 'bar',
		itemStyle: {
			normal: {
				color: 'rgba(248, 249, 254,0.1)'
			}
		},
		barGap: '-100%',
		barCategoryGap: '20%',
		data: dataShadow,
		animation: false
	}, {
		type: 'bar',
		itemStyle: {
			normal: {
				barBorderRadius: [50, 50, 0, 0],
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#00c3ed'
				}, {
					offset: 0.5,
					color: '#16d6ff'
				}, {
					offset: 1,
					color: '#16d6ff'
				}])
			},
			emphasis: {
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#16d6ff'
				}, {
					offset: 0.7,
					color: '#16d6ff'
				}, {
					offset: 1,
					color: '#00c3ed'
				}])
			}
		},
		data: data
	}]
};
// Enable data zoom when user click bar.
var zoomSize = 6;
myChart5.on('click', function(params) {
	console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
	myChart.dispatchAction({
		type: 'dataZoom',
		startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
		endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
	});
});
myChart5.setOption(option5);
/*--echart5---*/