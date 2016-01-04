continue语句
基本概念:
	continue跳转语句用来跳过本次循环中指定条件的语句，并且继续执行其他的循环语句
代码示例:如下代码求1到100之间所有奇数的和
<?php
$sum=0;
for($x=1;$x<=100;$x++)
{
	if($x%2==0) continue;
	$sum+=$x;
}
echo "\$sum=".$sum;
?>
运行结果:
$sum=2500