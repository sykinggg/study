使用构造函数
基本概念:
	对类体进行初始化主要有两种方法。
		第一种方法是在类体中定义一个专门的用于对类体进行初始化的方法
		第二种方法是应用构造函数实现类体的初始化
代码示例:
<?php
class car{
	public $color;
	public $size;
	public function setAttribute($x,$y){	//属性初始化
		$this->color=$x;
		$this->size=$y;
	}
	public function printAttribute(){		//输同属性
		echo "颜色:".$this->color;
		echo " 大小:".$this->size."米";
	}
}
$bus=new car();
$bus->setAttribute("blue", "20");			//初始化类的内部成员
$bus->printAttribute();						//输出结果
?>
运行结果:
颜色:blue 大小:20米
代码示例:构造函数的概念
<?php
class car{
	public $color;
	public $size;
	public function _construct($x,$y){		//通过构造函数对类体中的属性进行初始化
		$this->color=$x;
		$this->size=$y;
	}
	public function printAttribute(){
		echo "颜色:".$this->color;
		echo "  大小:".$this->size."米";
	}
}
//$bus=new car("blue","20");没卵用          		 //在实例化对象时为类体中属性指定初始值
$bus=new car();
$bus->setAttribute("blue", "20");			//初始化类的内部成员
$bus->printAttribute();
?>
运行结果:
颜色:blue 大小:20米