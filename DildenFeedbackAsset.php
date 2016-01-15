<?php

namespace dilden\feedbackwidget;

use yii\web\AssetBundle;

class DildenFeedbackAsset extends AssetBundle {

	public function init()
    {
        $this->sourcePath = '@vendor/dilden/yii2-feedback-widget/assets/';
        $this->css = [ 
		    'feedback.min.css'
		]; 
		$this->js = [
            'feedback.min.js',
            'html2canvas.min.js',
            // 'feedback.js',
            // 'html2canvas.js'
		];
        $this->depends = [
            'yii\web\JqueryAsset',
        ];
        parent::init();
    }

}
