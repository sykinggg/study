重载
基本概念:
	如果在父类中已经定义了某属性或方法，然后在子类中定义与父类同名的属性和方法也是合法的，这就是类的重载
作用:
	重载可以重写父类中指定方法所实现的功能
代码示例:
<?php
class father{						//定义father 类
	public function printNUM(){
		echo 10;
	}
}
class child extends father{			//子类child 继承 father 类
	public function printNUM(){		//重写 father 类中的方法，实现重载
		echo 10*10;
	}
}
$test1=new father();
$test1->printNUM();					//输出10
echo "<br>";
$test2=new child();
$test2->printNUM();					// 输出100
?>
运行结果:
10
100