变量的作用域
基本概念:变量在使用时，要符合变量的定义规则。变量必须在有效范围内使用，如果超出有效范围，变量也就失去意义了
	局部变量：即在函数内部定义的变量，其作用域是所在函数
	全局变量：即被定义在所有函数以外的变量，其作用域是整个PHP文件，但是在用户自定义函数内部是不可用的
		想在用户自定义函数内部使用全局变量，要使用global关键字声明
代码示例:
<?php
	$my_name="myname";
	$myname="yourname";
	echo $my_name;// 输出myname
	echo "<br>";
	echo $$my_name;//通过$$my_name改变变量$my_name的名称为$myname，输出yourname	
?>