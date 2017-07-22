<?php
$str='abc';
$str1="你好"；
echo strlen($str);//3，使用strlen（）方法算字符串的长度，但是对中文字符不管用
echo strlen($str1);//6
echo mb_strlen($str1,'utf-8');//2，计算中文字符的长度使用mb_strlen（）方法，参数1是字符串，参数2是需要转换的字符的格式
?>