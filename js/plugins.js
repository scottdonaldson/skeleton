// Avoid `console` errors in browsers that lack a console.
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

(function($){
	// Create an array -- groups -- with the number of distinct .same-height groups
	var groups = [],
		sameHeight = $('.same-height');
	$('.same-height[data-group]').each(function(){
		$this = $(this);
		if ($.inArray($this.attr('data-group'), groups) === -1)
			groups.push($this.attr('data-group'));
	});
	function makeSameHeight(resize) {
		for (var i = 0; i < groups.length; i++) {
			sameHeight = $('.same-height[data-group="' + groups[i] + '"]');
			targetHeight = 0;
			sameHeight.height('auto').each(function() {
				$this = $(this);
				if (!resize) { // needs outerHeight() initially, then height() on resizing
					targetHeight = $this.outerHeight() > targetHeight ? $this.outerHeight() : targetHeight;
				} else {
					targetHeight = $this.height() > targetHeight ? $this.height() : targetHeight;
				}
			});
			sameHeight.height(targetHeight);
		}
	}
	if (sameHeight.length > 0)
		makeSameHeight(false);
		$(window).on('load resize', makeSameHeight);
})(jQuery);