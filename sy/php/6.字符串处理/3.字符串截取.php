substr
基本概念:
	substr()函数从指定的字符串中按照指定的位置截取一定长度的字符
语法格式:
	substr(string str, int start, int length);
语法描述:
	str为指定的字符串对象
	start为指定开始截取字符串的位置(如果为start参数为负数，则从字符串末尾开始截取)
	length为可选参数，指定截取字符的个数(如果为负数则表示取到倒数第length个字符)
	该函数返回一个新的字符串
注意:字符串的索引是从零开始的
代码示例:
<?php
$a="i am A student";
echo substr($a,0,1)."<br>";
echo substr($a,-1,1)."<br>";
echo substr($a,0)."<br>";
?>
运行结果:
i
t
i am A student
