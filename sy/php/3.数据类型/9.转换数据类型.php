转换数据类型
基本概念:　虽然PHP是弱类型语言，但有时仍然需要用到类型转换
使用简介: 在变量前加上用括号括起来的类型名称即可
注意:类型强制转换如下
转换函数				转换类型
(boolean) 			转换为布尔型
(string) 			转换为字符串型
(integer) 			转换成整型
(float) 			转换成浮点型
(array) 			转换成数组
(object) 			转换成对象
代码示例:
<?php
$x="This is my family.";
echo "这是原始的string 形式：".$x;
echo "<br>";
echo "这是boolean形式:".(boolean)$x;
echo "<br>";
echo "这是integer形式:".(integer)$x;
?>
运行结果:
这是原始的string 形式：This is my family.
这是boolean形式:1
这是integer形式:0