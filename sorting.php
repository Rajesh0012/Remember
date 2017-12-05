
<?php

$arr= array(24,1,9,10,8,6,4,7,2,3,5);

for($i=0;$i<count($arr);$i++){
    
    for($j=$i+1;$j<count($arr);$j++){
        
        if($arr[$i]>$arr[$j]){
            
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
        }
        
    }
}
print_r($arr);