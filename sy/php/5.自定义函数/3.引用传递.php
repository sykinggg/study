引用传递
基本概念:实参的内存地址传递到形参中，在函数内部的所有操作都会影响到实参的值，即返回后，实参的值会发生变化
使用注意:传值时只需要在函数声明时的参数前加“＆”即可
代码示例:
<?php
function values($a)					//函数的声明
{
	$a++;
	echo "在函数内：\$a=".$a;			//输出形参的值 $a=2
}
$a=1;
values($a);							//传值：将$a传递给形参$a
echo "<p>在函数外 \$a=".$a."</p>"; 	//实参的值有变化，输出 $a=2
?>
一：变量的引用
代码示例:
<?php
$a=100;
$b=&$a; 		//注意:符号使用
echo $a;		//这里输出100
echo $b;		//这里输出100  ，说明$a,和$b的值都是一百。
$b=200;
echo $a;		//这里输出200
echo $b;		//这里输出200,这就可以看出他们用的是同一个地址。改变一个，另一个也会跟着改变。
?>
二：函数中引用传值.
代码示例:
<?php
function main($a,$b)
{
	$b=$a+100;
	return $b;
}
$b=main(55);
echo $b;
?>
代码描述:
	这里的$b其实就是把它的内存地址传递给函数main中的$b参数，通过参数$b的改变而改变外面的$b的值。
三：对象的引用传值
代码描述:
<?
class club{
	var $name="real madrid";
}
$b=new club;
$c=$b;
echo $b->name."<br>";		//这里输出real madrid
echo $c->name."<br>";		//这里输出real madrid
$b->name="ronaldo";
echo $c->name."<br>";		//这里输出ronaldo
?>
运行结果:
real madrid
real madrid
ronaldo
取消引用
使用注意:当你 unset 一个引用，只是断开了变量名和变量内容之间的绑定。这并不意味着变量内容被销毁了
代码示例:
<?php
$a='ronaldo';
$b=&$a;
echo $a."<br>";			//这里输出ronaldo
echo $b."<br>";			//这里输出ronaldo
unset($a);
echo $a."<br>";			//这里输出"      "(空值)
echo $b."<br>";			//这里输出ronaldo
?>
运行结果:
ronaldo
ronaldo

ronaldo