
## 基于 阿里云短信 验证的 业务类


## 安装

安装扩展
```
composer require gemor/fzo
```


数据库创建(手动创建一下吧)
```
CREATE TABLE `question_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `category` varchar(191) DEFAULT NULL COMMENT '栏目名称',
  `title` varchar(191) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
```


### 用法

```
/**
 * 发送短信
 * $phone 手机号
 */
(new \Fzo\VerifyCode())->send($phone)

/**
 * 验证短信
 * $phone 手机号
 * $code 短信验证码
 */
(new \Fzo\VerifyCode())->verify($phone, $code)

```


