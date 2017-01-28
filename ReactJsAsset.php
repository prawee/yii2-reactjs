<?php
/**
 * @link http://www.konkeanweb.com
 * 1/29/2017 AD 1:51 AM
 * @copyright Copyright (c) 2017 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\reactjs;

use yii\web\AssetBundle;

class ReactJsAsset extends AssetBundle
{
    public $sourcePath = '@bower/react';
    public function init()
    {
        parent::init();
        if (YII_ENV_DEV) {
            $this->js = [
                'react.js',
                'react-dom.js'
            ];
        } else {
            $this->js = [
                'react.min.js',
                'react-dom.min.js'
            ];
        }
    }
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
