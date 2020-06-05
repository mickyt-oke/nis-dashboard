(function($) {
	'use strict';
	$(window).on("load", function(e) {
		// ______________ Page loading
		$("#global-loader").fadeOut("slow");
		// ______________mCustomScrollbar
		$(".mcs-horizontal-example").mCustomScrollbar({
			axis: "x",
			theme: "dark-3",
			advanced: {
				autoExpandHorizontalScroll: true
			}
		});
		// ______________Popover
		var $popover = $('[data-toggle="popover"]'),
			$popoverClass = '';
		// Methods
		function init($this) {
			if ($this.data('color')) {
				$popoverClass = 'popover-' + $this.data('color');
			}
			var options = {
				trigger: 'focus',
				template: '<div class="popover ' + $popoverClass + '" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
			};
			$this.popover(options);
		}
		// Events
		if ($popover.length) {
			$popover.each(function() {
				init($(this));
			});
		}
	})
	
	// ______________mCustomScrollbar
	$(".mscroll").mCustomScrollbar();
	$(".app-sidebar").mCustomScrollbar({
		theme: "minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});
	// _____________Tooltip
	$('[data-toggle="tooltip"]').tooltip();
	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function() {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: '#eceef9',
				lineCap: 'round'
			});
		});
	}
	// ______________Full screen
	$("#fullscreen-button").on("click", function toggleFullScreen() {
		if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
			if (document.documentElement.requestFullScreen) {
				document.documentElement.requestFullScreen();
			} else if (document.documentElement.mozRequestFullScreen) {
				document.documentElement.mozRequestFullScreen();
			} else if (document.documentElement.webkitRequestFullScreen) {
				document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
			} else if (document.documentElement.msRequestFullscreen) {
				document.documentElement.msRequestFullscreen();
			}
		} else {
			if (document.cancelFullScreen) {
				document.cancelFullScreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.webkitCancelFullScreen) {
				document.webkitCancelFullScreen();
			} else if (document.msExitFullscreen) {
				document.msExitFullscreen();
			}
		}
	})
	// ______________ Cover images
	$(".cover-image").each(function() {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});
	
	// ______________ Back to top Button
	$(window).on("scroll", function(e) {
		// ______________ SCROLL TOP
		if ($(this).scrollTop() >300) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$('#back-to-top').on("click", function() {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});
	//side bar
	$(function(e) {
		$(".app-sidebar a").each(function() {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
		
	});
	// ______________Copy Clipboard
	// Variables
	var $element = '.btn-icon-clipboard',
		$btn = $($element);
	// Methods
	function init($this) {
		$this.tooltip().on('mouseleave', function() {
			// Explicitly hide tooltip, since after clicking it remains
			// focused (as it's a button), so tooltip would otherwise
			// remain visible until focus is moved away
			$this.tooltip('hide');
		});
		var clipboard = new ClipboardJS($element);
		clipboard.on('success', function(e) {
			$(e.trigger).attr('title', 'Copied!').tooltip('_fixTitle').tooltip('show').attr('title', 'Copy to clipboard').tooltip('_fixTitle')
			e.clearSelection()
		});
	}
	// Events
	if ($btn.length) {
		init($btn);
	}
})(jQuery);