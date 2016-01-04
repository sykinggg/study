str_ireplace
基本概念:
	str_ireplace()函数将指定字符串替换为另外一个指定的字符串
语法格式:
	str_ireplace(string search, string replace,string subject [int, $count])
语法描述:
	参数search为指定要查找的字符串
	replace为指定替换的值
	subject为指定查找的范围
	count为可选参数(获取执行替换的数量)
代码示例:
<?php
$a="i am A student.";
$c=0;
echo str_ireplace("i am A", "I am a",$a)."<br>";	//I am a student.
echo str_ireplace("t","T",$a,$c)."<br>";			//i am A sTudenT.
echo $c;											//2
?>
