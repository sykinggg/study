break语句
基本概念:
	break语句用于结束当前条件控制语句if、switch或者循环控制语句while、do...while、for、foreach的执行
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
		echo "No number between 1 and 3";
}
?>
运行结果:
Number 3