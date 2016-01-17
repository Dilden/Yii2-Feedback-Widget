<?php

namespace dilden\feedbackwidget;

use Yii;
use yii\base\Widget;
use yii\helpers\Url;
use dilden\feedbackwidget\DildenFeedbackAsset;

class DildenFeedback extends Widget
{
	/*
	* 
	* Basically, these are just pulbic variables taken from the origin feedback.js widget.
	* Documentation for this widget can be found at https://github.com/ivoviz/feedback/blob/master/README.md
	*
	*/
	public $ajaxURL = '';
	public $postBrowserInfo = 1;
	public $postHTML = 1;
	public $postURL = 1;
	public $proxy = "";
	public $letterRendering = 0;
	public $initButtonText = "Send Feedback";
	public $strokeStyle = "black";
	public $shadowColor = "black";
	public $shadowOffsetX = 1;
	public $shadowOffsetY = 1;
	public $shadowBlur = 10;
	public $lineJoin = "bevel";
	public $lineWidth = 3;
	public $html2CanvasURL = "";
	// public $tpl = array();
	public $onClose = "function(){}";
	public $screenshotStroke = 1;
	public $highlightElement  = 1;
	public $initialBox = 0;
	public $feedbackButton = ".feedback-btn";
	public $showDescriptionModal = 1;
	public $onScreenshotTaken = "function(){}";
	public $isDraggable = 1;
	public $tpl = [
		'description' => '<div id="feedback-welcome"><div class="feedback-logo">Feedback</div><p>Feedback lets you send us suggestions about our products. We welcome problem reports, feature ideas and general comments.</p><p>Start by writing a brief description:</p><textarea id="feedback-note-tmp"></textarea><p>Next we&#39;ll let you identify areas of the page related to your description.</p><button id="feedback-welcome-next" class="feedback-next-btn feedback-btn-gray">Next</button><div id="feedback-welcome-error">Please enter a description.</div><div class="feedback-wizard-close"></div></div>',
		'highlighter' => '<div id="feedback-highlighter"><div class="feedback-logo">Feedback</div><p>Click and drag on the page to help us better understand your feedback. You can move this dialog if it&#39;s in the way.</p><button class="feedback-sethighlight feedback-active"><div class="ico"></div><span>Highlight</span></button><label>Highlight areas relevant to your feedback.</label><button class="feedback-setblackout"><div class="ico"></div><span>Black out</span></button><label class="lower">Black out any personal information.</label><div class="feedback-buttons"><button id="feedback-highlighter-next" class="feedback-next-btn feedback-btn-gray">Next</button><button id="feedback-highlighter-back" class="feedback-back-btn feedback-btn-gray">Back</button></div><div class="feedback-wizard-close"></div></div>',
		'overview' => '<div id="feedback-overview"><div class="feedback-logo">Feedback</div><div id="feedback-overview-description"><div id="feedback-overview-description-text"><h3>Description</h3><h3 class="feedback-additional">Additional info</h3><div id="feedback-additional-none"><span>None</span></div><div id="feedback-browser-info"><span>Browser Info</span></div><div id="feedback-page-info"><span>Page Info</span></div><div id="feedback-page-structure"><span>Page Structure</span></div></div></div><div id="feedback-overview-screenshot"><h3>Screenshot</h3></div><div class="feedback-buttons"><button id="feedback-submit" class="feedback-submit-btn feedback-btn-blue">Submit</button><button id="feedback-overview-back" class="feedback-back-btn feedback-btn-gray">Back</button></div><div id="feedback-overview-error">Please enter a description.</div><div class="feedback-wizard-close"></div></div>',
		'submitSuccess' => '<div id="feedback-submit-success"><div class="feedback-logo">Feedback</div><p>Thank you for your feedback. We value every piece of feedback we receive.</p><p>We cannot respond individually to every one, but we will use your comments as we strive to improve your experience.</p><button class="feedback-close-btn feedback-btn-blue">OK</button><div class="feedback-wizard-close"></div></div>',
		'submitError' => '<div id="feedback-submit-error"><div class="feedback-logo">Feedback</div><p>Sadly an error occured while sending your feedback. Please try again.</p><button class="feedback-close-btn feedback-btn-blue">OK</button><div class="feedback-wizard-close"></div></div>'
	];


    public function run() {
    	parent::run();
    	$assetBundle = DildenFeedbackAsset::register($this->view);
    	$html2CanvasURL =  $assetBundle->baseUrl. "/html2canvas.min.js";
        return $this->view->registerJs($this->renderWidget());
    }

    public function renderWidget() {
    	return "$.feedback({
					ajaxURL: '".$this->ajaxURL."',
					postBrowserInfo: ".$this->postBrowserInfo.",
					postHTML: ".$this->postHTML.",
					postURL: ".$this->postURL.",
					proxy: '".$this->proxy."',
					letterRendering: ".$this->letterRendering.",
					initButtonText: '". $this->initButtonText ."',
					strokeStyle: '".$this->strokeStyle."',
					shadowColor: '".$this->shadowColor."',
					shadowOffsetX: ".$this->shadowOffsetX.",
					shadowOffsetY: ".$this->shadowOffsetY.",
					shadowBlur: ".$this->shadowBlur.",
					lineJoin: '".$this->lineJoin."',
					lineWidth: ".$this->lineWidth.",
					html2canvasURL: '". $this->html2CanvasURL."',
					onClose: ".$this->onClose.",
					screenshotStroke: ".$this->screenshotStroke.",
					highlightElement: ". $this->highlightElement .",
					initialBox: ".$this->initialBox.",
					feedbackButton: '".$this->feedbackButton."',
					showDescriptionModal: ".$this->showDescriptionModal.",
					onScreenshotTaken: ".$this->onScreenshotTaken.",
					isDraggable: ".$this->isDraggable.",
					tpl: {
						description: '".$this->tpl['description']."',
						highlighter: '".$this->tpl['highlighter']."',
						overview: '".$this->tpl['overview']."',
						submitSuccess: '".$this->tpl['submitSuccess']."',
						submitError: '".$this->tpl['submitError']."',
					}
				});";
    }
}
