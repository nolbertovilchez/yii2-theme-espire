<?php

namespace nolbertovilchez\yii2\theme\espire\assets;

class EspireLoginAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@vendor/nolbertovilchez/yii2-theme-espire/dist';
    
    public $css        = [
        'css/ei-icon.css',
        'css/themify-icons.css',
        'css/font-awesome.min.css',
        'css/animate.min.css',
        'css/app.min.css'
    ];
    
    public $js = [
        'js/app-login.min.js'
    ];
    
    public $depends    = [
        'nolbertovilchez\yii2\asset\Jquery',
        'nolbertovilchez\yii2\asset\Bootstrap4',
        'nolbertovilchez\yii2\asset\Pace'
    ];
    
    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css|js|images)%', $from);
        };
    }

}
