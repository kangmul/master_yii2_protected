<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'protected/web/css/site.css',
        'themes/vuexy/assets/app-assets/vendors/css/vendors.min.css',

        // BEGIN: Theme CSS
        'themes/vuexy/assets/app-assets/css/bootstrap.css',
        'themes/vuexy/assets/app-assets/css/bootstrap-extended.css',
        'themes/vuexy/assets/app-assets/css/colors.css',
        'themes/vuexy/assets/app-assets/css/components.css',
        'themes/vuexy/assets/app-assets/css/themes/dark-layout.css',
        'themes/vuexy/assets/app-assets/css/themes/bordered-layout.css',
        'themes/vuexy/assets/app-assets/css/themes/semi-dark-layout.css',

        // BEGIN: Page CSS
        'themes/vuexy/assets/app-assets/css/core/menu/menu-types/vertical-menu.css',
        'themes/vuexy/assets/app-assets/css/plugins/forms/form-validation.css',
        'themes/vuexy/assets/app-assets/css/pages/page-auth.css',
        // END: Page CSS

        // BEGIN: Custom CSS
        'themes/vuexy/assets/assets/css/style.css',
        // END: Custom CSS
    ];
    public $js = [
        // BEGIN: Vendor JS-->
        'themes/vuexy/assets/app-assets/vendors/js/vendors.min.js',
        // BEGIN Vendor JS-->

        // BEGIN: Page Vendor JS-->
        'themes/vuexy/assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js',
        // END: Page Vendor JS-->

        // BEGIN: Theme JS-->
        'themes/vuexy/assets/app-assets/js/core/app-menu.js',
        'themes/vuexy/assets/app-assets/js/core/app.js',
        // END: Theme JS-->

        // BEGIN: Page JS-->
        'themes/vuexy/assets/app-assets/js/scripts/pages/page-auth-login.js',
        // END: Page JS-->
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
