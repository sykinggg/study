预定义变量
基本概念:PHP中可以使用预定义常量获取PHP中的信息。常用的预定义常量如下表
常量名							功能
__FILE__ 						默认常量，PHP程序文件名
__LINE__ 						默认常量，PHP程序行数
PHP_VERSION 					PHP程序版本
PHP_OS 							执行PHP解析器的操作系统名称
TRUE 							真值
FALSE 							假值
NULL 							null值
E_ERROR 						指到最近的错误处
E_WARNING 						指到最近的警告处
E_PARSE 						指解析语法有潜在问题处
E_NOTICR 						为发生不寻常但不一定是错误处
注意:其中__FILE__与__LINE__中的“_”是两条而不是一条
代码示例:
<?php
	echo "当前文件路径:" .__FILE__;
	echo "<br>当前行数:" .__LINE__;
	echo "<br>当前PHP版本信息:" .PHP_VERSION;
	echo "<br>当前操作系统:" .PHP_OS;	
?>