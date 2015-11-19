<?php

namespace app\components\yii2feedbackwidget;
// namespace dilden\feedbackwidget;
use yii\web\AssetBundle;

class DildenFeedbackAsset extends AssetBundle {

    // public $sourcePath = '@app/components/yii2feedbackwidget/assets';

    // public $css = ['@app/components/yii2feedbackwidget/assets/feedback.min.css'];
    // public $js = ['@app/components/yii2feedbackwidget/assets/feedback.min.js'];

    // public $depends = [
    // ];

	public function init()
    {
        $this->sourcePath = '@app/components/yii2feedbackwidget/assets/';
        $this->basePath = '@webroot';
        $this->baseUrl = '@web';
        $this->css = [ 
		    'assets/feedback.min.css'
		]; 
		$this->js = [
            'assets/feedback.min.js'
		];
        $this->depends = [
            'yii\web\JqueryAsset',
        ];
        parent::init();
    }

 //    protected function setSourcePath($path)
 //    {
 //        if (empty($this->sourcePath)) {
 //            $this->sourcePath = $path;
 //        }
 //    }

}