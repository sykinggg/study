域运算符
基本概念:
	在PHP中“::”这个叫范围解析操作符，又名域运算符
		“::”符号可以认为是与C语言中的“.”相似的，而它更像C++中(Perl)的::类范围操作符
注意:
	在没有声明任何实例的情况下访问类中的函数或者基类中的函数和变量很有用处
	而:: 运算符即用于此情况
代码示例:
<?php
class A{
	function example(){
		echo "I am the original function A::example().<br />\n";
	}
}
class B{
	function example(){
		echo "I am the redefined function B::example().<br />\n";
    	A::example();
	}
}
// A 类没有对象，这将输出
// I am the original function A::example().<br />
A::example();
 
// 建立一个 B 类的对象
$b = new B;
 
// 这将输出
//  I am the redefined function B::example().<br />
//  I am the original function A::example().<br />
$b->example();
?>
运行结果:
I am the original function A::example().
I am the redefined function B::example().
I am the original function A::example().