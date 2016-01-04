while语句
基本概念:
	while循环控制语句，其主要作用主要是反复执行某一项操作
运行描述:
	while循环控制语句对表达式的值进行判断
		当表达式为非0值时，执行while语句中的内嵌语句号
		当表达式的值为0时，则不执行while语句中的内嵌语句
语法格式:
while(expr){		//expr 为表达式
	statement; 		// 当表达式expr的值为true时，输出内容。
}
语法示例:
<?php
$x=1;
$sum=0;
while ($x<=100)
{
	$sum+=$x;
	$x++;
}
echo "\$sum=".$sum;
?>
运行结果:$sum=5050