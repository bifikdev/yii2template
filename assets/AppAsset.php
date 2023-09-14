<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package app\assets
 */
class AppAsset extends AssetBundle
{

    /**
     * @var string
     */
    public $basePath = '@webroot';

    /**
     * @var string
     */
    public $baseUrl = '@web';

    /**
     * @var array
     */
    public $css = [
        'css/site.min.css',
        'css/callout.min.css',
        'css/main.min.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'js/main.js',
        'js/site.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'rmrevin\yii\fontawesome\NpmFreeAssetBundle',
    ];
}
