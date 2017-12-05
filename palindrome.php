<?php

$str= 'RARS';


for($j=strlen($str)-1;$j>=0;$j--){
    
     $a[]=$str[$j];
      $j;
  }
  $imp=implode('',$a);
if($imp == $str){
    echo 'palindrome';
}