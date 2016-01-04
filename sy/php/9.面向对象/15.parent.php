parent
基本概念:
	parent关键字是指向父类的指针，主要用于调用父类的构造函数
代码示例:
<?php
class test{
	private $x;
	private $y;
	function _construct($a,$b){			//通过构造函数对当前类体中的属性进行赋值
		$this->x=$a;
		$this->y=$b;
	}
}
class test2 extends test{
	public function _construct(){
		parent::_construct("汇智网","在线学习"); 	 // 通过parent 调用父类的构造函数
	}
}
?>
代码描述:
	首先定义test类作为父类，并在该类中定义构造函数_construct()
	然后定义test2并继承test,同时在test2类体中定义该子类的构造函数
		并在该构造函数中用parent来实现父类的初始化