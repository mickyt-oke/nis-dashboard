! function($) {
	"use strict";

	var VectorMap = function() {
	};

	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_mill_en',
			scaleColors : ['#5d61bf', '#f47b25'],
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#e0e8f5'
				}
			},
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#00c3ed',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 9,
                    'stroke-opacity': 0.2
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
			markers : [{
				latLng : [53.38332836757156, -6.218261718750001],
				name : 'Ireland'
			}, {
				latLng : [41.88592102814744, 12.524414062500002],
				name : 'Italy'
			}, {
				latLng : [28.62310355452992, 77.20092773437501],
				name : 'India'
			}, {
				latLng : [52.37559917665913, 4.883422851562501],
				name : 'Netherland'
			}, {
				latLng : [37.532600, 127.024612],
				name : 'South Korea'
			}, {
				latLng : [52.5200, 13.4050],
				name : 'Germany'
			}, {
				latLng : [9.1450, 40.4897],
				name : 'Ethopia'
			}, {
				latLng : [60.1282, 18.6435],
				name : 'Sweden'
			}, {
				latLng : [61.5240, 105.3188],
				name : 'Russia'
			}, {
				latLng : [45.460130637921004, -75.69580078125001],
				name : 'Canada'
			}, {
				latLng : [38.87392853923632, -77.03613281250001],
				name : 'United States'
			}, {
				latLng : [48.864714761802794, 362.35107421875006],
				name : 'France'
			}, {
				latLng : [-4.61, 55.45],
				name : 'Seychelles'
			}, {
				latLng : [17.95783210227242, -76.78344726562501],
				name : 'Jamaica'
			}, {
				latLng : [-15.760536148501288, -47.90039062500001],
				name : 'Brazil'
			}, {
				latLng : [-24.046463999666567, 133.41796875000003],
				name : 'Australia'
			}, {
				latLng : [2.967727271204168, 113.85131835937501],
				name : 'Malaysia'
			}, {
				latLng : [35.8617, 104.1954],
				name : 'China'
			}, {
				latLng : [51.481382896100975, -0.13183593750000003],
				name : 'UK'
			}, {
				latLng : [23.765236889758672, 44.736328125],
				name : 'Saudi Arabia'
			}, {
				latLng : [-25.760319754713873, 28.190917968750004],
				name : 'South Africa'
			}, {
				latLng : [-1.2743089918452106, 36.82617187500001],
				name : 'Kenya'
			}, {
				latLng : [8.971897294083014, 7.470703125000001],
				name : 'Nigeria'
			}]
		});


		$('#uk').vectorMap({
			map : 'uk_mill_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#f47b25'
				}
			}
		});

		$('#usa').vectorMap({
			map : 'us_aea_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#5d61bf'
				}
			}
		});


		$('#australia').vectorMap({
			map : 'au_mill',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#3ebaef'
				}
			}
		});


		$('#canada').vectorMap({
			map : 'ca_lcc',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#31c92e'
				}
			}
		});


	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap;
	$.VectorMap.init();
}(window.jQuery);


