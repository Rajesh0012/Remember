<?php

$nu=17;
$flag=1;
for($i=2;$i<$nu;$i++){

if($nu%$i == 0){

   $flag =2; 
    break;

}

}
if($flag == 1){
    
    echo 'prime ';
}else{
    echo 'not prime';
}
