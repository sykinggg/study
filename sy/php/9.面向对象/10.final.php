final
基本概念:
	利用final关键字修饰的方法不能被重载
	同样使用该关键字修饰的类也不能被继承
<?php
class father{
	final function fun(){
		echo "father";
	}
}
class child extends father{
	function fun(){
		echo "child";
	}
}
$obj=new child();
$obj->fun();
?>
运行结果:(报错)
PHP Fatal error: Cannot override final method father::fun() in /course/test.php on line 12