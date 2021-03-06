<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace alkurn\ladda;

use yii\web\AssetBundle;

class LaddaAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/ladda/dist';
    public $css = [
        'ladda-themeless.min.css',
    ];
    public $js = [
        'spin.min.js',
        'ladda.min.js',
        'ladda.jquery.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}