函数介绍
基本概念:
array_key_exists()
		array_key_exists()用于判断某键值是否为该函数所指定的数组的键值，如果是则返回True，否则返回False
	语法格式:
		bool array_key_exists(key,array_search)
	语法描述:
		key为要判断的键
		array_search为要查询的数组
count()
		count()用于返回指定数组中元素的个数
	语法格式:
		int count(mixed var [int, mode])
	语法描述:
		var为指定的数组
		mode为可选参数,如果选了,数组将进行递归计算
sort()与rsort()
		sort()用于对指定的数组进行升序排序
		rsort用于对指定数组进行降序排序
	语法格式:
		bool sort(array);
		bool rsort(array);
综合代码实例:
<?php
$array=array(1,5,6,3,7,10);
if(array_key_exists("6",$array))
	echo "exist!<br>";
else
	echo "not exist!<br>";
echo "\$array的元素个数是:".count($array)."<br>";
$asc=sort($array);					//对数组进行升序排序
foreach($array as $value){			//输出排序后的结果
	echo $value."<br>";
}
echo "<br>";
$desc=rsort($array);				//对数组进行降序排序
foreach($array as $value){			//输出排序后的结果
	echo $value."<br>";
}
?>
运行结果:
not exist!
$array的元素个数是:6
1 3 5 6 7 10 
10 7 6 5 3 1