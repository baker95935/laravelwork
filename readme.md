based on laravel5.4

安装方法

1 代码获取不在描述
代码获取后  在网站根目录执行  composer update  加载扩展组件
2
获取代码后  修改网站根目录.env 和 config/database.php
里面的数据库信息 请设置保持一致

3 生成本地通讯的KEY
php artisan key:generate

4 执行数据迁移
1）迁移表结构
执行 php artisan migrate
2）迁移测试数据
php artisan db:seed

5 邮件设置可能需要
把.evn给贴出来
APP_NAME=website
APP_ENV=local
APP_KEY=base64:des0S3adhYHMIugAtmcPksxnxwI47428dheROdxrTCk=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://homework.6328.net

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homework
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.163.com
MAIL_PORT=465
MAIL_USERNAME=homework0820@163.com
MAIL_PASSWORD=homework0820
MAIL_ENCRYPTION=ssl

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

如果不能通讯 请重新执行一次
php artisan key:generate

