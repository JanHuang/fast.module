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
        static::createSrc($root);
        static::createWeb($root);
        static::createTests($root);
        static::move($root);
    }

    public static function createWeb($rootPath)
    {
        $web = $rootPath . DIRECTORY_SEPARATOR . 'web';
        static::mkdir($web);
    }

    public static function createSrc($rootPath)
    {
        $src = $rootPath . DIRECTORY_SEPARATOR . 'src';
        static::mkdir($src);
    }

    public static function createTests($rootPath)
    {
        $tests = $rootPath . DIRECTORY_SEPARATOR . 'tests';
        static::mkdir($tests);
    }

    protected static function mkdir($dir)
    {
        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    public static function move($rootPath)
    {
        static::moveUnitFile($rootPath);
    }

    public static function moveUnitFile($rootPath)
    {}
}