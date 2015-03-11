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
// Video items
$items = [
   '<iframe src="https://www.youtube.com/embed/ES__vbRnN-A" frameborder="0"></iframe>',
   '<iframe src="https://www.youtube.com/embed/Ez_LIuE96-A" frameborder="0"></iframe>'
 ];
 
// Or image items
$items = [
   '<img src="/imagepath/imagename.jpg" alt="" title="Your image title">',
];
 
 echo BxSlider::widget([
    'pluginOptions' => [
        'maxSlides' => 1,
        'controls' => false,
         // set video property to true, if in $items array exist videos
        'video' => true,
        'slideWidth' => 400,
         // usage events
        'onSliderLoad' => new JsExpression('
            function() {
                alert("Slider load");
            },
        ')
     ],
    'items' => $items 
 ]); 
```

Slider Options 
----------------
You can find them on the [options page](http://bxslider.com/options)
