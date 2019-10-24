## AliyunSts
Aliyun STS临时授权访问OSS

### install
1. `composer require birjemin/aliyun-sts`
2. `config/app.php`中引入`ServiceProvider.php`
3. 执行 `php artisan vendor:publish --provider="Birjemin\AliyunSts\ServiceProvider"`生成配置文件

### 文档
1. [流程总览](https://help.aliyun.com/document_detail/100624.html)
2. [Php示例](https://help.aliyun.com/document_detail/28792.html)
