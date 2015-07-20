<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/7/17
 * Time: 下午12:24
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace Module;

use Composer\Script\Event;

class Module
{
    public static function init(Event $event)
    {
        $root = realpath('.');
        static::createBoot($root);
        static::createWeb($root);
        static::createSrc($root);
    }

    public static function createBoot($rootPath)
    {
        $boot = $rootPath . DIRECTORY_SEPARATOR . 'app';
        static::mkdir($boot);
        static::mkdir($boot . '/config');
        copy(__DIR__ . '/init/app/Application.php', $boot . '/Application.php');
        copy(__DIR__ . '/init/app/global.php', $boot . '/config/global.php');
        copy(__DIR__ . '/init/app/console', $boot . '/console');
    }

    public static function createWeb($rootPath)
    {
        $web = $rootPath . DIRECTORY_SEPARATOR . 'web';
        static::mkdir($web);
        copy(__DIR__ . '/init/web/index.php', $web . '/index.php');
    }

    public static function createSrc($rootPath)
    {
        $src = $rootPath . DIRECTORY_SEPARATOR . 'src';
        static::mkdir($src);
    }

    protected static function mkdir($dir)
    {
        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }
    }
}