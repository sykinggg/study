NULL 值
基本概念:特殊的 NULL 值表示变量无值
	注意:NULL 是数据类型 NULL 唯一可能的值
		NULL 值标示变量是否为空。也用于区分空字符串与空值数据库。可以通过把值设置为 NULL，将变量清空
代码示例:
<?php
$x="hello world!";
$x=null;
var_dump($x);
?>
运行结果:NULL
