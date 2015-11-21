<?php
	// what am I doing?
	// echo "this is stupid";
 $this->registerJs("
	$.feedback({
	    ajaxURL: '/site/feedback',
	    html2canvasURL: '/assets/html2canvas.min.js',
	    initButtonText: 'Report Issue',
	    highlightElement: false,
	    postHTML: false,
	    postURL: true,
	});");
