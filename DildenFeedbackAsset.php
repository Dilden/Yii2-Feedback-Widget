<?php

namespace app\components\yii2feedbackwidget;
// namespace dilden\feedbackwidget;
use yii\web\AssetBundle;

class DildenFeedbackAsset extends AssetBundle {

	

	//if this asset depends on other assets you may populate below array
	public $depends = [
		'yii\web\JqueryAsset',
	];

	public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->css = [ 
		    '/assets/feedback.min.css'
		]; 
		$this->js=[
		     '/assets/feedback.min.js'
		];
        parent::init();
    }

	/**
     * Sets the source path if empty
     * @param string $path the path to be set
     */
    protected function setSourcePath($path)
    {
        if (empty($this->sourcePath)) {
            $this->sourcePath = $path;
        }
    }
}