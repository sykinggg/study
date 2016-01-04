浮点数
基本概念:浮点数是有小数点或指数形式的数字
代码实现:
<?php
$x = 10.356;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x)
?>
运行结果:
float(10.356) 
float(2400) 
float(8.0E-5)