定义和调用函数
基本概念:函数是代表一组语句的标识符，它能够实现程序模块化的策略
	要完成一个模块化的策略就需要定义一个函数
		在PHP中定义函数的语法格式如下
代码示例:
<?php
function function_name($arg_1,$arg_2,...$arg_n)
{
	code 函数要执行的代码;
	return 返回的值；
}
?>
代码描述:其中 function 为声明自定义函数
	function_name 为自定义函数的名字
	$arg为参数列表
	code为函数被调用时要执行的代码
		要使用“{}”括起来
	return 调用函数需要的返回值，return 为关键字
使用注意:函数的调用很简单，只需要引用函数名并赋予正确的参数即可完成函数的调用
代码示例:
<?php
function values($a)
{
	if($a==11)
	echo "true";
	else
	echo "false";
}
values(10);
?>