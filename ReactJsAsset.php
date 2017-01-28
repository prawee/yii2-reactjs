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
    public $sourcePath = '@bower';
    public function init()
    {
        parent::init();
        $this->js[] = YII_ENV_DEV ? '':'';
    }
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}