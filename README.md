L05 Laravel 教程 - 电商实战

* composer 安装的时候记得安装dev的
* npm install 的时候会有gyp编译fsevent时报错，暂时忽略，如果非要解决可参考https://www.cnblogs.com/nayek/p/12229705.html尝试下，网上的解决方案都说没安装xcode的命令行工具，但是本机mac已经安装了，但是版本不是最新的
* npm run watch-poll 会自动打包编译
* 商品使用了elasticsearch，所以要开启这个服务，如果添加或者编辑了商品，需要执行 php artisan es:sync-products 来同步elasticsearch
