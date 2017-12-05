<?php
 $d=5;
for($i=1;$i<=5;$i++){
    
    for($j=1;$j<=5;$j++){   
        
        if($j === $d || $i === $j){
            
            echo  '*'.'&nbsp';
        }else{
            echo '&nbsp'.'&nbsp'.'&nbsp';
        }
    }
    $d--;
    echo '<br>';
}