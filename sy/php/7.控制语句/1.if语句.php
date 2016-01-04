if语句
基本概念:
	根据获取的不同条件判断执行不同的语句
语法结构
	if(exp) 					//基本的表达式
	if(exp){} 					//执行多条语句的表达式
	if(exp){}else{} 			//通过else延伸的表达式
	if(exp)else if(){}else{} 	//判断多个条件的表达式
语法示例:
<?php
$a=10;
if($a==11)
echo 'true';
else
echo 'false';
?>
运行结果:false
