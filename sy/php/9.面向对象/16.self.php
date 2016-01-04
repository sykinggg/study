self
基本概念:
	self关键字是指向类的本身，也就是说该关键字并不指向任何已实例化的对象
详细描述:
	由于类只能直接引用类体中的静态成员，而关键字又指向类本身
	所以self关键字经常用于在类体中调用类的静态成员
	调用方法为self关键字加域运算符再加静态成员名。静态变量一般用static 修饰
代码描述:
<?php
class test{
	static private $x;
	function getNUM(){
		return ++self::$x;		//通过self调用类体中的静态成员$x
	}
}
?>
		