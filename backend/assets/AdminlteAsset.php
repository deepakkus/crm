<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AdminlteAsset extends AssetBundle
{
    public $sourcePath = '@webroot/web/adminlte'; 

    public $css = [
        'plugins/fontawesome-free/css/all.min.css',
        'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'dist/css/adminlte.min.css'
    ];
    public $js = [
        'plugins/jquery/jquery.min.js',
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'dist/css/adminlte.min.css',
        'plugins/jquery/jquery.min.js',
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'dist/js/adminlte.js',
        'dist/js/demo.js',
        'plugins/jquery-mousewheel/jquery.mousewheel.js',
        'plugins/raphael/raphael.min.js',
        'plugins/jquery-mapael/jquery.mapael.min.js',
        'plugins/jquery-mapael/maps/usa_states.min.js',
        'plugins/chart.js/Chart.min.js',
        'dist/js/pages/dashboard2.js'
    ];
}
