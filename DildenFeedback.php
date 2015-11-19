<?php

namespace app\components\yii2feedbackwidget;
// namespace dilden\feedbackwidget;

use Yii;
use yii\base\Widget;
use app\components\yii2feedbackwidget\DildenFeedbackAsset;

class DildenFeedback extends Widget
{

    public function run() {
    	// parent::run();
    	DildenFeedbackAsset::register($this->view);
        return $this->render('feedback');
    }
}