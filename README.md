## AliyunSts
Aliyun STS临时授权访问OSS

### 使用
1. 在laravel中安装
`composer require birjemin/aliyun-sts`

2. 在`config/app.php`中引入`ServiceProvider.php`，然后执行下面命令生成配置文件

```php
php artisan vendor:publish --provider="Birjemin\AliyunSts\ServiceProvider"
```

3. 使用(确保`aliyun-sts.php`配置正确)

```php
$sts = (new Sts())->getToken()->Credentials;
```

### 参考文档

1. [官方调用流程总览](https://help.aliyun.com/document_detail/100624.html)
2. [官方Php示例](https://help.aliyun.com/document_detail/28792.html)
3. 引用核心包`jimchen/aliyun-php-sdk-sts`（此为第三方包替阿里云官方封装的，我就直接引用了 Orz... >o< ）
