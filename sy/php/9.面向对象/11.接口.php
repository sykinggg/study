接口
基本概念:
	接口可以看作是多继承的解决方案
	其主要思想是指定一个实现了该接口的类，而在该类中必须实现接口中所有的方法
	PHP中接口是用关键字interface进行声明
代码示例:
<?php
interface test{			//定义test接口
	function fun();
}
?>
代码描述:
	以上代码声明了test接口，并在接口中定义了方法fun(),但并未定义fun()方法的具体所要实现的功能
	定义fun()方法所实现的功能是在实现该接口的类中定义的，这样就引入了实现接口的概念
概念扩展:
	用关键字implements指定类所要实现的接口，并且该类必须定义接口中的所指定的方法，否则程序将发生错误
注意:继承多个接口时，每个接口名称要用逗号隔开
<?php
class work implements test{		// 实现test接口
	function fun(){
		echo "实现接口";
	}
}
?>
代码示例:多个接口的实现如下代码：
<?php
interface test1{				//定义test1接口
	function fun();
}
interface test2{				//定义test2接口
	function fu();
}
interface Itest extends test1, test2{	//接口Itest 继承test1，test2 接口
	function ifun();
}
class work implements Itest{	//接口的实现
	function fun(){
		echo "实现接口test1中的方法";
	}
	function fu(){
		echo "实现接口test2中的方法";
	}
	function ifun(){
		echo "实现接口test3中的方法";
	}
}
?>