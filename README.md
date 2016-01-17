Yii2 Feedback Widget
====================
This Yii2 extension is intended to enable live feedback from users on a Yii2 web app by acting as a wrapper for the ivoviz/feedback js plugin.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

### Install

Either run

```
$ php composer.phar require dilden/yii2-feedback-widget "dev-master"
```

or add

```
"dilden/yii2-feedback-widget": "dev-master"
```

to the ```require``` section of your `composer.json` file.

#### Alternative Install

Add

```
{
    "type": "git",
    "url": "https://github.com/Dilden/Yii2-Feedback-Widget"
}
```

to the repositories section of your `composer.json` file.

Then add

```
"dilden/yii2-feedback-widget": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \dilden\feedbackwidget\DildenFeedback::widget(['ajaxURL' => 'pinneapple/feedback', 'highlightElement' => 0,]); ?>
 ```

Configurable options can be found at the original project [Ivoviz/Feedback](https://github.com/ivoviz/feedback).

Controller
----------

Setting up your controller to handle the AJAX response is simple enough. Simply set the ajaxURL parameter when declaring your widget (it is required for this widget to work). Create an action in your controller to accept the request. It could look something like this if you wanted to send an email.

```php
namespace app\controllers;

use yii\web\Response;

class PinneappleController extends Controller
{

    public function actionFeedback()
    {
        // ajax validation
        if (Yii::$app->request->isAjax) {

            $data = json_decode($_POST['feedback']);

            $htmlMail = '<h3>User Information </h3> Browser Version: ' . $data->browser->appVersion 
                    . '<p>User Agent: ' . $data->browser->userAgent.'</p>'
                    . '<p>Platform: ' . $data->browser->platform.'</p><hr>'
                    . '<p>URL: ' . $data->url .'</p>'
                    . '<p>Note: ' . $data->note .'</p>';

            // Send email with image attached as HTML file
            Yii::$app->mailer->compose()
                ->setFrom('EMAIL_ADDRESS_HERE@gmail.com')
                ->setTo('SEND_TO_ADDRESS_HERE@gmail.com')
                ->setSubject('SUBJECT_GOES_HERE')
                ->setHtmlBody($htmlMail)
                ->attachContent('<!DOCTYPE html><html><body><img src="' . $data->img .'" /></body></html>', ['fileName' => 'screengrab.html', 'contentType' => 'text/html'])
                ->send();
            Yii::$app->response->format = Response::FORMAT_JSON;
            return $data;
        }
        return false;
    }
}

```
