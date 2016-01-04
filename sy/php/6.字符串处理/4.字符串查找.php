strstr与strrchr
基本概念:
	strstr()函数获取指定字符串(A)在另一个字符串（B）中首次出现的位置到后者末尾的子字符串，区分字母大小写
	strrchr()函数获取字符串(A)在另一个字符串（B）中最后一次出现的位置，区分字母大小写
注意:strstr() 与 	strrchr()语法格式相同
语法格式:
	strstr(string haystack,string needle);
语法描述:
	haystack为指定将要被搜索的字符串
	needle为指定将要搜索的内容
		如果该参数是一个数值，那么将搜索与这个数值的ASCII值相匹配的字符
	如果执行成功，则返回剩余字符串
	如果没有找到，则返回False
