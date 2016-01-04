对象克隆
基本概念：
	就可以通过实例化后的对象调用类中的成员，如果要求两个对象具有相同的特征，可以再对类进行实例化来生成一个新对象
	PHP 提供了关键字 clone，应用该关键字即可实现对象的克隆
代码示例:
<?php
class work{
	function fun(){
		echo "work";
	}
}
$obj1=new work();
$obj2=clone $obj1;			//对object1进行实例化生成对象$obj2
$obj2->fun();				//与obj1有相同的特性，输出work!
?>
运行结果:
work