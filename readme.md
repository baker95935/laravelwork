based on laravel5.4

��װ����

1 �����ȡ��������
�����ȡ��  ����վ��Ŀ¼ִ��  composer update  ������չ���
2
��ȡ�����  �޸���վ��Ŀ¼.env �� config/database.php
��������ݿ���Ϣ �����ñ���һ��

3 ���ɱ���ͨѶ��KEY
php artisan key:generate

4 ִ������Ǩ��
1��Ǩ�Ʊ�ṹ
ִ�� php artisan migrate
2��Ǩ�Ʋ�������
php artisan db:seed

5 �ʼ����ÿ�����Ҫ
��.evn��������
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

�������ͨѶ ������ִ��һ��
php artisan key:generate

