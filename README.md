Yii2 Feedback Widget
====================
This Yii2 extension is intended to enable live feedback from users on a Yii2 web app by automatically submitting feedback to Github or Bitbucket repo issues

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist dilden/yii2-feedback-widget "*"
```

or add

```
"dilden/yii2-feedback-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \dilden\feedbackwidget\AutoloadExample::widget(); ?>```