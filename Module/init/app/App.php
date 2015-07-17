<?php

/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/7/17
 * Time: 下午3:39
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */
class App extends \Kernel\AppKernel
{
    /**
     * Register project bundles into the kernel.
     *
     * @return array
     */
    public function registerBundles()
    {
        return array(

        );
    }

    /**
     * Register custom kernel plugins.
     * Must return array.
     * examples:
     *  return array(
     *      "Monolog\\Logger"
     *  )
     *
     * @return array
     */
    public function registerHelpers(){}

    /**
     * @return array
     */
    public function registerConfigVariable(){}

    /**
     * Register application configuration
     *
     * @param \FastD\Config\Config
     * @return void
     */
    public function registerConfiguration(\FastD\Config\Config $config){}
}