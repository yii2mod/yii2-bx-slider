<?php

namespace yii2mod\bxslider;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class BxSlider
 * @package yii2mod\bxslider
 */
class BxSlider extends Widget
{
    /**
     * @var array items container options
     */
    public $containerOptions = [];

    /**
     * @var array item options
     */
    public $itemOptions = [];

    /**
     * @var array plugin options
     */
    public $pluginOptions = [];

    /**
     * @var array slider items
     */
    public $items = [];

    /**
     * Initializes the object.
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Render range slider
     * @return string|void
     */
    public function run()
    {
        if (empty($this->items)) {
            return;
        }
        if (!isset($this->containerOptions['id'])) {
            $this->containerOptions['id'] = $this->getId();
        }
        echo $this->renderItems() . "\n";
        $this->registerAssets();
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        BxSliderAsset::register($view);
        $js = '$("#' . $this->containerOptions['id'] . '").bxSlider(' . $this->getPluginOptions() . ');';
        $view->registerJs($js, $view::POS_END);

    }

    /**
     * Return plugin options in json format
     * @return string
     */
    public function getPluginOptions()
    {
        return Json::encode($this->pluginOptions);
    }

    /**
     * Renders slider items.
     * @return string the rendering result
     */
    public function renderItems()
    {
        $items = [];
        for ($i = 0, $count = count($this->items); $i < $count; $i++) {
            $items[] = Html::tag('li', $this->items[$i], $this->itemOptions);
        }

        return Html::tag('ul', implode("\n", $items), $this->containerOptions);
    }
}
