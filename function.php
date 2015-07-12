<?php
function unhtml($content){      //定义自定义函数的名称
    $content=htmlspecialchars($content);        //转换文本中的特殊字符
    $content=str_replace("@","",$content);      //替换文本中的换行符
    return trim($content);      //删除文本中首尾的空格
}

//定义一个用截取一段字符长度的函数中msubstr()
//$str是字符串 $start是字符串的起始位置 $len是字符串的长度
function msubstr($str,$start,$len){
    $strlen=$start+$len;        //$strlen存储字符串的长度
    $tmpstr="";     //声明一个变量，赋值为空
    for($i=0;$i<$strlen;$i++){
        //如果字符串首个字节的ASCII序数值大于0xa0，则表示汉字
        if(ord(substr($str,$i,1))>0xa0){
            $tmpstr=substr($str,$i,2);      //每次取出来个字节，表示为一个汉字
        } else
            $tmpstr=substr($str,$i,1);
    }
    return $tmpstr;     //输出字符串
}