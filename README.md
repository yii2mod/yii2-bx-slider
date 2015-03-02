Bx Slider Widget for Yii 2
=========
- Widget based on BxSlider extension http://bxslider.com/

Installation   
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-bx-slider "*"
```

or add

```json
"yii2mod/yii2-bx-slider": "*"
```

to the require section of your composer.json.

Usage
------------
Once the extension is installed, simply add widget to your page as follows:

```php
 echo BxSlider::widget([
    'pluginOptions' => [
        'maxSlides' => 1,
        'controls' => false,
        'video' => true,
        'slideWidth' => 400
     ],
    'items' => $items 
    ]); 
```

Slider Options 
----------------
You can find them on the [options page](http://bxslider.com/options)
