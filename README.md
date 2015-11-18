Yii2 Feedback Widget
====================
This Yii2 extension is intended to enable live feedback from users on a Yii2 web app by automatically submitting feedback to Github or Bitbucket repo issues

Installation
------------

Add

```
{
    "type": "git",
    "url": "https://github.com/Dilden/Yii2-Feedback-Widget"
}
```

to the repositories section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \dilden\feedbackwidget\DildenFeedback::widget(); ?>```