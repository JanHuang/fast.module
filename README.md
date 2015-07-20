#fastd-module

----

创建自己的 **FastD Framework** 开发包。

----

创建 `composer.json`，加入依赖脚本:

```
{
    "require": {
        "fastd/fastd-module": "0.1.x-dev"
    },
    "scripts": {
        "post-update-cmd": "Module\\Module::init",
        "post-install-cmd": "Module\\Module::init",
        "post-create-project-cmd": "Module\\Module::init"
    }
}
```

执行 `composer -vvv install`

安装完成后会生成目录结构: 

```
drwxr-xr-x   5 janhuang  admin   170B  7 20 12:01 app
-rw-r--r--   1 janhuang  admin   254B  7 20 11:58 composer.json
-rw-r--r--   1 janhuang  admin    28K  7 20 12:00 composer.lock
drwxr-xr-x   2 janhuang  admin    68B  7 20 12:00 src
drwxr-xr-x  11 janhuang  admin   374B  7 20 12:00 vendor
drwxr-xr-x   3 janhuang  admin   102B  7 20 12:00 web
```

访问 `web` 目录，会呈现: 


`Welcome to FastD Module Framework.`

等字眼，环境生成成功.

建立自己的项目包在 `src` 目录。目录结构遵循 `psr-4` 即可，需要有 `Boot.php` 引导文件，继承 `FastD\Framework\Bundle` 基类引导文件。完成自己的项目包。即可发布vcs，自行进行依赖安装，达到一人开发，多人维护，随时更新。酸爽

