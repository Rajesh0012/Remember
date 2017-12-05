<?php
 
for($i=1;$i<=5;$i++){
    
    for($j=1;$j<=5;$j++){
        
        if($j === 1 || $j === 5 || $i == $j){
            
            echo  '*'.'&nbsp';
        }else{
            echo '&nbsp'.'&nbsp'.'&nbsp';
        }
    }
    echo '<br>';
}