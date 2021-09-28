# 声网RTC SDK for PHP  !

### 主要新特性

* 简化使用方法
* 调用简单
* 可执行单元测试
* github内的包都无法自定义过期时间，本包可以随意设置时间
* 持续更新中...
*

### 更新日志

- 1.0.0 生成加入频道所需要的token

## 安装

> 运行环境要求PHP7.1+。

### 快速使用

在您开始之前，您需要注册声网并获取您的[证书和appid](https://console.agora.io/projects)。

### 使用

```php
<?php

use cccdl\agora_sdk\Token;

$config =  [
    'appid' => '请填写您的AppId',
    'appCertificate' => '请填写您的声网证书',
]

$RtcTokenBuilder = new RtcTokenBuilder($config);
$token = $RtcTokenBuilder->buildTokenWithUid('test', {此处填写整形uid},  {过期时间秒数});
```

### 接口对应文件

| 文件|说明|
| -------------------|------------|
| cccdl\agora_sdk\Token\RtcTokenBuilder.php|生成token|

## 文档

[声网api文档](https://docs.agora.io/cn/Video/landing-page?platform=RESTful)

## 问题

[提交 Issue](https://github.com/cccdl/agora_sdk/issues)，不符合指南的问题可能会立即关闭。

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/cccdl/agora_sdk/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/cccdl/agora_sdk/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and
PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT