<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/7/18
 * Time: 下午8:34
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

class Welcome
{
    public function welcomeAction()
    {
        return <<<WELCOME
<!doctype html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<title>FastD Module</title>
<style>
    body {
        font-family: 'Source Sans Pro', sans-serif;
        -webkit-font-smoothing: antialiased;
    }
    section {
        text-align: center;
        padding-top: 150px;
    }
    section h1 {
        font-size: 32px;
    }
</style>
</head>
<body>
    <section>
        <h1>Welcome to FastD Module Framework.</h1>
    </section>
</body>
</html>
WELCOME;
;
    }
}

Routes::get('/', '\Welcome@welcomeAction');