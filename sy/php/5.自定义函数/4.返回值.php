return
基本概念:return 将函数的值返回给函数的调用者，即将程序控制权返回到调用者的作用域
代码实现:
<?php
function value($a)		//函数的声明
{
	if($a==11)
		$t='true';
	else
		$t='false';
	return $t;
}
$temp=value(11);		//函数的调用
echo $temp;				//结果为true
?>
运行结果:true