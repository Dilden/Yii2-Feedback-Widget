<?php

namespace app\components\yii2feedbackwidget;
// namespace dilden\feedbackwidget;

use Yii;
use app\components\yii2feedbackwidget\DildenFeedbackAsset;

class DildenFeedback extends \yii\base\Widget
{
	public function init() {
		DildenFeedbackAsset::register($this);
	}

    public function run()
    {
        return "Testing the update!";
    }
}

// $.feedback({
//     ajaxURL: '/site/feedback',
//     html2canvasURL: '/assets/html2canvas.min.js',
//     initButtonText: 'Report Issue',
//     highlightElement: false,
//     postHTML: false,
//     postURL: true,
//     tpl: {
//         description: '<div id="feedback-welcome"><div class="feedback-logo">Feedback</div><p>Feedback lets you send us suggestions about our products. We welcome problem reports, feature ideas and general comments.</p><p>Start by writing a brief description:</p><textarea id="feedback-note-tmp"></textarea><p>Next we\'ll let you identify areas of the page related to your description.</p><button id="feedback-welcome-next" class="feedback-next-btn feedback-btn-gray">Next</button><div id="feedback-welcome-error">Please enter a description.</div><div class="feedback-wizard-close"></div></div>',
//         highlighter: '<div id="feedback-highlighter"><div class="feedback-logo">Feedback</div><p>Click and drag on the page to help us better understand your feedback. You can move this dialog if it\'s in the way.</p><button class="feedback-sethighlight feedback-active"><div class="ico"></div><span>Highlight</span></button><label>Highlight areas relevant to your feedback.</label><button class="feedback-setblackout"><div class="ico"></div><span>Black out</span></button><label class="lower">Black out any personal information.</label><div class="feedback-buttons"><button id="feedback-highlighter-next" class="feedback-next-btn feedback-btn-gray">Next</button><button id="feedback-highlighter-back" class="feedback-back-btn feedback-btn-gray">Back</button></div><div class="feedback-wizard-close"></div></div>',
//         overview: '<div id="feedback-overview"><div class="feedback-logo">Feedback</div><div id="feedback-overview-description"><div id="feedback-overview-description-text"><h3>Description</h3><p>Enter your email address if you would like<br> to recieve correspondence about this bug report.</p><h3 class="feedback-additional">Additional info</h3><div id="feedback-additional-none"><span>None</span></div><div id="feedback-browser-info"><span>Browser Info</span></div><div id="feedback-page-info"><span>Page Info</span></div><div id="feedback-page-structure"><span>Page Structure</span></div></div></div><div id="feedback-overview-screenshot"><h3>Screenshot</h3></div><div class="feedback-buttons"><button id="feedback-submit" class="feedback-submit-btn feedback-btn-blue">Submit</button><button id="feedback-overview-back" class="feedback-back-btn feedback-btn-gray">Back</button></div><div id="feedback-overview-error">Please enter a description.</div><div class="feedback-wizard-close"></div></div>',
//         submitSuccess: '<div id="feedback-submit-success"><div class="feedback-logo">Feedback</div><p>Thank you for your feedback.</p><p>Your feedback will help improve the Kalix Intranet.</p><button class="feedback-close-btn feedback-btn-blue">OK</button><div class="feedback-wizard-close"></div></div>',
//         submitError:    '<div id="feedback-submit-error"><div class="feedback-logo">Feedback</div><p>Sadly an error occured while sending your feedback. Please try again.</p><button class="feedback-close-btn feedback-btn-blue">OK</button><div class="feedback-wizard-close"></div></div>'
//     },
// });
