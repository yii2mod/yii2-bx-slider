<?php

namespace yii2mod\bxslider;

use yii\web\AssetBundle;

/**
 * Class BxSliderAsset
 * @package yii2mod\bxslider
 */
class BxSliderAsset extends AssetBundle
{

    /**
     * @var string
     */
    public $sourcePath = '@bower/bx-slider.js';

    /**
     * @var array
     */
    public $css = [
        'dist/jquery.bxslider.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'dist/jquery.bxslider.js',
        'dist/vendor/jquery.fitvids.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
