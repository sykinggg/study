switch语句
基本概念:
	switch语句和if条件控制语句类似，实现将同一个表达式与很多不同的值比较，获取相同的的值，并且执行相同的值对应的语句
语法格式:
	switch(表达式){
		case 常量表达式: 语句1;
		case 常量表达式: 语句2;
		...
		case 常量表达式n: 语句n;
		default: 语句n+1;
	}
语法描述:
	计算表达式的值。 并逐个与其后的常量表达式值相比较
	当表达式的值与某个常量表达式的值相等时， 即执行其后的语句，
	然后不再进行判断，继续执行后面所有case后的语句
	如表达式的值与所有case后的常量表达式均不相同时，则执行default后的语句
代码示例:
<?php
$x=3;
switch ($x)
{
	case 1:
		echo 'Number 1';
		break;
	case 2:
		echo 'Number 2';
		break;
	case 3:
		echo 'Number 3';
		break;
	default:
		echo "NO number between 1 and 3";
}
?>
运行结果:
Number 3