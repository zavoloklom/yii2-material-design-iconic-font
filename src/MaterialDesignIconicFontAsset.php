<?php
namespace zavoloklom\yii\material\font;

/*
 * Yii 2 asset from bower
 *
 * @package     yii2-material-design-iconic-font
 * @link        https://github.com/zavoloklom/yii2-material-design-iconic-font GitHub Project
 * @link        http://zavoloklom.github.io/material-design-iconic-font Material Design Iconic Font Homepage
 * @copyright   Copyright &copy; Sergey Kupletsky, www.zavoloklom.com, 2016
 * @license     MIT
 * @author      Sergey Kupletsky <s.kupletsky@gmail.com>
 */
class MaterialDesignIconicFontAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/material-design-iconic-font/dist';
    public $css = [
        'css/material-design-iconic-font.min.css',
    ];
}