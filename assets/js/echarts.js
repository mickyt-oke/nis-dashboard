	/*--echart1---*/
	var myChart1 = echarts.init(document.getElementById('echart1'));
	var option1 = {
		title: {
			text: ''
		},
		tooltip: {},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		legend: {
			data: ['Sales']
		},
		xAxis: {
			data: ["shirt", "cardign", "chiffon shirt", "pants", "heels", "socks"]
		},
		yAxis: {},
		series: [{
			name: 'Sales',
			type: 'bar',
			data: [5, 20, 36, 10, 10, 20]
		}],
		color: ['#00c3ed']
	};
	myChart1.setOption(option1);
	/*--echart1---*/
	/*--echart2---*/
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
		toolbox: {
			show: true,
			feature: {
				mark: {
					show: true
				},
				dataView: {
					show: true,
					readOnly: false
				},
				magicType: {
					show: true,
					type: ['pie']
				},
				restore: {
					show: true
				},
				saveAsImage: {
					show: true
				}
			}
		},
		calculable: true,
		series: [{
			name: '',
			type: 'pie',
			radius: [20, 110],
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
				value: 5,
				name: 'Feb'
			}, {
				value: 15,
				name: 'Mar'
			}, {
				value: 25,
				name: 'Apr'
			}, {
				value: 20,
				name: 'May'
			}, {
				value: 25,
				name: 'Jun'
			}, {
				value: 30,
				name: 'Jul'
			}, {
				value: 40,
				name: 'Aug'
			}]
		}, ],
		color: ['#ed2a00', '#004ced', '#00eda1', '#ed00c3', '#00c3ed', ' #081340 ', '#ffa21d', '#f94920']
	};
	myChart2.setOption(option2);
	/*--echart2---*/
	/*--echart3---*/
	var myChart3 = echarts.init(document.getElementById('echart3'));
	var symbolSize = 20;
	var data = [
		[15, 0],
		[-50, 10],
		[-56.5, 20],
		[-46.5, 30],
		[-22.1, 40]
	];
	var points = [];
	option3 = {
		title: {},
		tooltip: {
			formatter: function(params) {
				var data = params.data || [0, 0];
				return data[0].toFixed(2) + ', ' + data[1].toFixed(2);
			}
		},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		grid: {
			left: '3%',
			right: '4%',
			bottom: '3%',
			containLabel: true
		},
		xAxis: {
			min: -60,
			max: 20,
			type: 'value',
			axisLine: {
				onZero: false
			}
		},
		yAxis: {
			min: 0,
			max: 40,
			type: 'value',
			axisLine: {
				onZero: false
			}
		},
		series: [{
			id: 'a',
			type: 'line',
			smooth: true,
			symbolSize: symbolSize,
			data: data
		}],
		color: ['#00c3ed']
	};
	var zr = myChart3.getZr();
	zr.on('click', function(params) {
		var pointInPixel = [params.offsetX, params.offsetY];
		var pointInGrid = myChart3.convertFromPixel('grid', pointInPixel);
		if (myChart.containPixel('grid', pointInPixel)) {
			data.push(pointInGrid);
			myChart.setOption({
				series: [{
					id: 'a',
					data: data
				}]
			});
		}
	});
	zr.on('mousemove', function(params) {
		var pointInPixel = [params.offsetX, params.offsetY];
		zr.setCursorStyle(myChart3.containPixel('grid', pointInPixel) ? 'copy' : 'default');
	});
	myChart3.setOption(option3);
	/*--echart3---*/
	/*--echart4---*/
	var myChart4 = echarts.init(document.getElementById('echart4'));
	var colors = ['#00c3ed', ' #ffa21d'];
	option4 = {
		color: colors,
		tooltip: {
			trigger: 'none',
			axisPointer: {
				type: 'cross'
			}
		},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		legend: {
			data: ['2015', '2016']
		},
		grid: {
			top: 70,
			bottom: 50
		},
		xAxis: [{
			type: 'category',
			axisTick: {
				alignWithLabel: true
			},
			axisLine: {
				onZero: false,
				lineStyle: {
					color: colors[1]
				}
			},
			axisPointer: {
				label: {
					formatter: function(params) {
						return 'Sales  ' + params.value + (params.seriesData.length ? '：' + params.seriesData[0].data : '');
					}
				}
			},
			data: ["2016-1", "2016-2", "2016-3", "2016-4", "2016-5", "2016-6", "2016-7", "2016-8", "2016-9", "2016-10", "2016-11", "2016-12"]
		}, {
			type: 'category',
			axisTick: {
				alignWithLabel: true
			},
			axisLine: {
				onZero: false,
				lineStyle: {
					color: colors[0]
				}
			},
			axisPointer: {
				label: {
					formatter: function(params) {
						return 'profit  ' + params.value + (params.seriesData.length ? '：' + params.seriesData[0].data : '');
					}
				}
			},
			data: ["2015-1", "2015-2", "2015-3", "2015-4", "2015-5", "2015-6", "2015-7", "2015-8", "2015-9", "2015-10", "2015-11", "2015-12"]
		}],
		yAxis: [{
			type: 'value'
		}],
		series: [{
			name: '2015',
			type: 'line',
			xAxisIndex: 1,
			smooth: true,
			data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
		}, {
			name: '2016',
			type: 'line',
			smooth: true,
			data: [3.9, 5.9, 11.1, 18.7, 48.3, 69.2, 231.6, 46.6, 55.4, 18.4, 10.3, 0.7]
		}]
	};
	myChart4.setOption(option4);
	/*--echart4---*/
	/*--echart5---*/
	var myChart5 = echarts.init(document.getElementById('echart5'));
	var dataAxis = ['ad', 'ae', 'us', 'in', 'cu', 'cy', 'na', 'sa', 'ln', 'ur', 'gu', 'hk', 'pk', 'kr', 'je', 'au', 'me', 'ml', 'mn', 'ne'];
	var data = [220, 182, 191, 234, 290, 330, 310, 123, 442, 321, 90, 149, 210, 122, 133, 334, 198, 123, 125, 220];
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
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		xAxis: {
			data: dataAxis,
			axisLabel: {
				inside: true,
				textStyle: {
					color: '#fff'
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
			y2: 20
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
					color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
						offset: 0,
						color: '#00c3ed'
					}, {
						offset: 0.5,
						color: '#24d6fd'
					}, {
						offset: 1,
						color: '#24d6fd'
					}])
				},
				emphasis: {
					color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
						offset: 0,
						color: '#24d6fd'
					}, {
						offset: 0.7,
						color: '#24d6fd'
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
	/*--echart6---*/
	var myChart6 = echarts.init(document.getElementById('echart6'));
	var base = +new Date(1968, 9, 3);
	var oneDay = 24 * 3600 * 1000;
	var date = [];
	var data = [Math.random() * 300];
	for (var i = 1; i < 20000; i++) {
		var now = new Date(base += oneDay);
		date.push([now.getFullYear(), now.getMonth() + 1, now.getDate()].join('/'));
		data.push(Math.round((Math.random() - 0.5) * 20 + data[i - 1]));
	}
	option6 = {
		tooltip: {
			trigger: 'axis',
			position: function(pt) {
				return [pt[0], '10%'];
			}
		},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		title: {
			left: 'center',
			text: '',
		},
		xAxis: {
			type: 'category',
			boundaryGap: false,
			data: date
		},
		yAxis: {
			type: 'value',
			boundaryGap: [0, '100%']
		},
		grid: {
			x: 40,
			y: 20,
			x2: 40,
			y2: 20
		},
		dataZoom: [{
			type: 'inside',
			start: 0,
			end: 10
		}, {
			start: 0,
			end: 10,
			handleSize: '100%',
			handleStyle: {
				color: '#fff',
				shadowBlur: 10,
				shadowColor: 'rgba(0, 0, 0, 0.6)',
				shadowOffsetX: 2,
				shadowOffsetY: 2
			}
		}],
		series: [{
			name: '',
			type: 'line',
			smooth: true,
			symbol: 'none',
			sampling: 'average',
			itemStyle: {
				color: '#23dbcf'
			},
			areaStyle: {
				color: new echarts.graphic.LinearGradient([{
					offset: 0,
					color: '#00c3ed'
				}, {
					offset: 1,
					color: '#ffa21d'
				}])
			},
			data: data
		}],
		color: ['#00c3ed']
	};
	myChart6.setOption(option6);
	/*--echart6---*/
	/*--echart5---*/
	var myChart7 = echarts.init(document.getElementById('echart7'));
	option7 = {
		title: {
			text: '',
			subtext: '',
			x: 'center'
		},
		tooltip: {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		legend: {
			x: 'center',
			y: 'bottom',
			data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']
		},
		toolbox: {
			show: true,
			feature: {
				mark: {
					show: true
				},
				dataView: {
					show: true,
					readOnly: false
				},
				magicType: {
					show: true,
					type: ['pie', 'funnel']
				},
				restore: {
					show: true
				},
				saveAsImage: {
					show: true
				}
			}
		},
		calculable: true,
		series: [{
			name: '',
			type: 'pie',
			radius: [30, 110],
			center: ['50%', '50%'],
			roseType: 'area',
			data: [{
				value: 10,
				name: 'Jan'
			}, {
				value: 5,
				name: 'Feb'
			}, {
				value: 15,
				name: 'Mar'
			}, {
				value: 25,
				name: 'Apr'
			}, {
				value: 20,
				name: 'May'
			}, {
				value: 35,
				name: 'Jun'
			}, {
				value: 30,
				name: 'Jul'
			}, {
				value: 40,
				name: 'Aug'
			}]
		}],
		color: ['#ed2a00', '#004ced', '#00eda1', '#ed00c3', '#00c3ed', ' #081340 ', '#ffa21d', '#f94920']
	};
	myChart7.setOption(option7);
	/*--echart5---*/
	/*--echart5---*/
	var myChart8 = echarts.init(document.getElementById('echart8'));
	// Generate data
	var category = [];
	var dottedBase = +new Date();
	var lineData = [];
	var barData = [];
	for (var i = 0; i < 20; i++) {
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
		backgroundColor: '#081340',
		tooltip: {
			trigger: 'axis',
			axisPointer: {
				type: 'shadow'
			}
		},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		legend: {
			data: ['line', 'bar'],
			textStyle: {
				color: '#ccc'
			}
		},
		xAxis: {
			data: category,
			axisLine: {
				lineStyle: {
					color: '#ccc'
				}
			}
		},
		yAxis: {
			splitLine: {
				show: false
			},
			axisLine: {
				lineStyle: {
					color: '#ccc'
				}
			}
		},
		series: [{
			name: 'line',
			type: 'line',
			smooth: true,
			showAllSymbol: true,
			symbol: 'emptyCircle',
			symbolSize: 15,
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
			data: lineData
		}, {
			name: 'bar',
			type: 'bar',
			barWidth: 10,
			itemStyle: {
				normal: {
					barBorderRadius: 5,
					color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
						offset: 0,
						color: '#00c3ed'
					}, {
						offset: 1,
						color: '#3eddff'
					}])
				}
			},
			data: barData
		}, {
			name: 'line',
			type: 'bar',
			barGap: '-100%',
			barWidth: 10,
			itemStyle: {
				normal: {
					color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
						offset: 0,
						color: 'rgba(0,195,237,0.5)'
					}, {
						offset: 0.2,
						color: 'rgba(0,195,237,0.2)'
					}, {
						offset: 1,
						color: 'rgba(0,195,237,0)'
					}])
				}
			},
			z: -12,
			data: lineData
		}, {
			name: 'dotted',
			type: 'pictorialBar',
			symbol: 'rect',
			itemStyle: {
				normal: {
					color: '#0f375f'
				}
			},
			symbolRepeat: true,
			symbolSize: [12, 4],
			symbolMargin: 1,
			z: -10,
			data: lineData
		}]
	};
	myChart8.setOption(option8);
	/*--echart5---*/
	/*--echart9---*/
	var myChart9 = echarts.init(document.getElementById('echart9'));
	option9 = {
		title: {
			text: '',
			subtext: '',
			top: 10,
			left: 10
		},
		tooltip: {
			trigger: 'item',
			backgroundColor: 'rgba(0,0,250,0.2)'
		},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		legend: {
			type: 'scroll',
			bottom: 10,
			data: (function() {
				var list = [];
				for (var i = 1; i <= 28; i++) {
					list.push(i + 2000 + '');
				}
				return list;
			})()
		},
		visualMap: {
			top: 'middle',
			right: 10,
			color: ['#00c3ed', '#23dbcf '],
			calculable: true
		},
		radar: {
			indicator: [{
				text: 'IE8-',
				max: 400
			}, {
				text: 'IE9+',
				max: 400
			}, {
				text: 'Safari',
				max: 400
			}, {
				text: 'Firefox',
				max: 400
			}, {
				text: 'Chrome',
				max: 400
			}]
		},
		series: (function() {
			var series = [];
			for (var i = 1; i <= 28; i++) {
				series.push({
					name: '浏览器（数据纯属虚构）',
					type: 'radar',
					symbol: 'none',
					lineStyle: {
						width: 1
					},
					emphasis: {
						areaStyle: {
							color: 'rgba(0,250,0,0.3)'
						}
					},
					data: [{
						value: [
							(40 - i) * 10, (38 - i) * 4 + 60,
							i * 5 + 10,
							i * 9,
							i * i / 2
						],
						name: i + 2000 + ''
					}],
					color: ['#ed2a00', '#004ced', '#00eda1', '#ed00c3', '#00c3ed', ' #081340 ', '#ffa21d', '#f94920']
				});
			}
			return series;
		})()
	};
	myChart9.setOption(option9);
	/*--echart9---*/
	/*--echart10---*/
	var myChart10 = echarts.init(document.getElementById('echart10'));
	option10 = {
		tooltip: {
			formatter: "{a} <br/>{b} : {c}%"
		},
		toolbox: {
			feature: {
				restore: {},
				saveAsImage: {}
			}
		},
		series: [{
			name: '',
			type: 'gauge',
			splitNumber: 10,
			axisLine: {
				lineStyle: {
					color: [
						[0.2, '#00c3ed'],
						[0.8, '#ffa21d'],
						[1, '#081340']
					],
					width: 20
				}
			},
			axisTick: {
				splitNumber: 10,
				length: 12,
				lineStyle: {
					color: 'auto'
				}
			},
			detail: {
				formatter: '{value}%'
			},
			data: [{
				value: 50,
				name: ''
			}],
		}],
	};
	setInterval(function() {
		option10.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
		myChart10.setOption(option10, true);
	}, 2000);
	myChart10.setOption(option10);
	/*--echart10---*/