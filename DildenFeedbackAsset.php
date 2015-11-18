<?php

namespace app\components\yii2feedbackwidget;
// namespace dilden\feedbackwidget;
use yii\web\AssetBundle;

class DildenFeedbackAsset extends AssetBundle {

	// public $basePath = '@webroot';
	// public $baseUrl = '@web';
	public $css = [ 
	    '/assets/feedback.min.css'
	]; 
	public $js=[
	     '/assets/feedback.min.js'
	];

	//if this asset depends on other assets you may populate below array
	public $depends = [
	];
}