<?php
$str = "Hii Sakir";
echo $str."<br>";
$len = strlen($str);
echo "The length of this string is ". $len . ".Thank you<br>";
echo "The number of worlds in this string is ". str_word_count($str). ".Thank you<br>";
echo "The reversed string is ". strrev($str). ".Thank you<br>";
echo "The search for is in this string is ". strpos($str,"kir"). ".Thank you<br>";
echo "The replace string is ". str_replace("Sak","Nas",$str). ".Thank you<br>";
// echo $len;


?>