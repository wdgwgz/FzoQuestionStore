
## 简单版本 问题内容库 
```
注意：测试关联扩展，生成环境不要使用
```


## 安装

```
composer require gemor/fzo-question-store
```


## 数据库创建
```
CREATE TABLE `question_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `category` varchar(191) DEFAULT NULL COMMENT '栏目名称',
  `question` varchar(191) DEFAULT NULL COMMENT '标题',
  `answer` text COMMENT '内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
```


## 用法

```
/**
 *
 * 获取所有 问题
 * @param string $cate 栏目名称
 * @param number $limit 返回的条数
 */
(new \FzoQuestionStore\FzoQuestionStore)->getAll( $cate = '', $limit = 50);

/**
 *
 * 获取 所有栏目
 *
 */
(new \FzoQuestionStore\FzoQuestionStore())->getAllCate();


```


