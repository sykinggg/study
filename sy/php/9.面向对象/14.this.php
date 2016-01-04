this
基本概念:
	this关键字为指向当前对象的指针，可以用该关键字调用当前类体中的属性和方法
代码实现:
<?php
class work{
	private $x;
	private $y;
	function _construct($a,$b){	//通过this关键字对当前类体中的属性进行赋值
		$this->x=$a;
		$this->y=$b;
	}
	function show(){
		echo $x."<br>";
		echo $y;
	}
}
$a=new work();
$a->_construct("hello", "world");
$a->show();
?>