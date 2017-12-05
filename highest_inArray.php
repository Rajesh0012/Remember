
<?php
$max= 0;
$arr= array(200,24,1,9,10,8,6,4,7,2,3,5,100);

for($i=0;$i<count($arr);$i++){
   
    if($arr[$i]>$max){
        
        $max =$arr[$i];
    }
}
echo $max;