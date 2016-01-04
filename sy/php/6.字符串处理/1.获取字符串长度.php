strlen
基本概念:PHP为我们提供了strlen函数来实现
代码实现:
strlen(string str);		//参数str为指定字符串,且该函数返回一个int类型的值
代码示例:
<?php
$a='123asd';
echo strlen($a);
?>
运行结果:6