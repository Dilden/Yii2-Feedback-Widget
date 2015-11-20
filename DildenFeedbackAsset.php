<?php

namespace app\components\yii2feedbackwidget;
// namespace dilden\feedbackwidget;
use yii\web\AssetBundle;

class DildenFeedbackAsset extends AssetBundle {

	public function init()
    {
        $this->sourcePath = '@app/components/yii2feedbackwidget/assets/';
        $this->css = [ 
		    'feedback.min.css'
		]; 
		$this->js = [
            'feedback.min.js'
		];
        $this->depends = [
            'yii\web\JqueryAsset',
        ];
        parent::init();
    }

}