var myChart = echarts.init(document.getElementById('echart'));
// Generate data
var category = [];
var dottedBase = +new Date();
var lineData = [];
var barData = [];
for (var i = 0; i < 10; i++) {
	var date = new Date(dottedBase += 3600 * 24 * 1000);
	category.push([
		date.getFullYear(),
		date.getMonth() + 1,
		date.getDate()
	].join('-'));
	var b = Math.random() * 200;
	var d = Math.random() * 200;
	barData.push(b)
	lineData.push(d + b);
}
// option
option8 = {
	tooltip: {
		trigger: 'axis',
		axisPointer: {
			type: 'shadow'
		}
	},
	legend: {
		data: ['line', 'bar'],
		textStyle: {
			color: '#70768e'
		}
	},
	xAxis: {
		data: category,
		axisLine: {
			lineStyle: {
				color: '#70768e'
			}
		}
	},
	yAxis: {
		splitLine: {
			show: false
		},
		axisLine: {
			lineStyle: {
				color: '#70768e'
			}
		}
	},
	grid: {
		x: 30,
		y: 20,
		x2: 0,
		y2: 20
	},
	series: [{
		name: 'Sales Revenue',
		type: 'line',
		smooth: true,
		showAllSymbol: true,
		symbol: 'emptyCircle',
		symbolSize: 20,
		data: lineData,
		itemStyle: {
			normal: {
				barBorderRadius: 5,
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#ffa21d'
				}, {
					offset: 1,
					color: '#ffa21d'
				}])
			}
		},
	}, {
		name: 'Sales',
		type: 'bar',
		barWidth: 20,
		itemStyle: {
			normal: {
				barBorderRadius: 5,
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#00c3ed'
				}, {
					offset: 1,
					color: '#00c3ed'
				}])
			}
		},
		data: barData
	}, {
		name: 'Profit',
		type: 'bar',
		barGap: '-100%',
		barWidth: 20,
		itemStyle: {
			normal: {
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#00c3ed'
				}, {
					offset: 0.2,
					color: '#00c3ed'
				}, {
					offset: 1,
					color: '#00c3ed'
				}])
			}
		},
		z: -12,
		data: lineData
	}, ]
};
myChart.setOption(option8);
var myChart2 = echarts.init(document.getElementById('echart2'));
option2 = {
	title: {
		text: '',
		subtext: '',
		x: 'center'
	},
	tooltip: {
		trigger: 'item',
		formatter: "{a} <br/>{b} : {c} ({d}%)"
	},
	legend: {
		x: 'center',
		y: 'bottom',
		data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']
	},
	calculable: true,
	series: [{
		name: '',
		type: 'pie',
		radius: [30, 150],
		center: ['50%', '50%'],
		roseType: 'radius',
		label: {
			normal: {
				show: false
			},
			emphasis: {
				show: true
			}
		},
		lableLine: {
			normal: {
				show: false
			},
			emphasis: {
				show: true
			}
		},
		data: [{
			value: 10,
			name: 'Jan'
		}, {
			value: 15,
			name: 'Feb'
		}, {
			value: 15,
			name: 'Mar'
		}, {
			value: 20,
			name: 'Apr'
		}, {
			value: 25,
			name: 'May'
		}, {
			value: 35,
			name: 'Jun'
		}]
	}, ],
	color: [ '#d62649', '#18b16f', '#fb1b84',' #0b1e70 ', '#00c3ed',  '#ffa21d','#6AF9C4']
};
myChart2.setOption(option2);