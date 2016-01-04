foreach
基本概念:
	foreach循环控制语句主要用于处理数组，是遍历数组的一种简单方法
语法格式:
	foreach(array_expression as $value){
		statement;
	}
	或者
	foreach(array_expression as $key=>$value){
		statement;
	}
语法描述:
	参数array_expression是指主要遍历的数组
	$value是数组的值
	$key是数组的键名称
	statement是满足条件时要执行的语句
<?php
$color = array("red","green","blue","yellow");
foreach ($color as $value){
	echo "$value <br>";
}
foreach ($color as $key=>$value){
	echo "$key       $value<br>";		//输出键与值
}
?>
运行结果:
red 
green 
blue 
yellow 
0 red
1 green
2 blue
3 yellow
