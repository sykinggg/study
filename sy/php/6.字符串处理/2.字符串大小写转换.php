strtoupper与ucwords
基本概念:
	strtoupper()将指定的字符全部转换为大写;	strtolower()将指定的字符都转换成小写
	ucwords()将指定字符串中每个单词的首字母都转成大写；ucfirst()函数将指定字符串的首字母转换为大写
使用方式:
	在括号中填入指定的字符串即可
代码示例:
<?php
$a="i am A student";
echo strtoupper($a)."<br>";
echo strtolower($a)."<br>";
echo ucwords($a)."<br>";
echo ucfirst($a)."<br>";
?>
运行结果:
I AM A STUDENT
i am a student
I Am A Student
I am A student