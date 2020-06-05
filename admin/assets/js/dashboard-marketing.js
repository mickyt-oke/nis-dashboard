$(function(e) {
	'use strict';
	var ctx = document.getElementById("sales-chart");
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Africa", "America", "Europe", "Asia", "Oceania"],
			defaultFontFamily: 'Montserrat',
			datasets: [{
				label: "passport",
				data: [10235, 12325, 12326, 15632, 14325],
				backgroundColor: '#00c3ed',
				borderColor: '#00c3ed',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: '#00c3ed',
				pointBackgroundColor: '#00c3ed',
			}, {
				label: "visas",
				data: [15326, 16325, 14256, 17852, 14256],
				backgroundColor: '#ffa21d',
				borderColor: '#ffa21d',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: '#ffa21d',
				pointBackgroundColor: '#ffa21d',
			}, {
				label: "ETC",
				data: [5326, 7325, 9256, 7852, 8256],
				backgroundColor: '#0b1e70',
				borderColor: '#0b1e70',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: '#0b1e70',
				pointBackgroundColor: '#0b1e70',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				titleFontFamily: 'Montserrat',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						color: 'rgba(0,0,0,0.061)'
					},
					scaleLabel: {
						display: false,
						labelString: ''
					}
				}],
				yAxes: [{
					display: true,
					gridLines: {
						display: false,
						drawBorder: true
					},
					scaleLabel: {
						display: true,
						labelString: 'Facilities'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	//Team chart
	var ctx = document.getElementById("team-chart");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
			type: 'line',
			defaultFontFamily: 'Montserrat',
			datasets: [{
				data: [10235, 12325, 12326, 15632, 14325, 10324, 14215],
				label: "Sessions",
				backgroundColor: 'rgba(255,162,29, 0.7)',
				borderColor: '#ffa21d',
				borderWidth: 3.5,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#ffa21d',
			}, ]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				titleFontFamily: 'Montserrat',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: false,
				position: 'top',
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						color: 'rgba(0,0,0,0.061)'
					},
					scaleLabel: {
						display: false,
						labelString: 'Month'
					}
				}],
				yAxes: [{
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
					scaleLabel: {
						display: true,
						labelString: 'Sessions'
					}
				}]
			},
			title: {
				display: false,
			}
		}
	});
});