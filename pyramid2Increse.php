<?php
/**
 * Created by PhpStorm.
 * User: Rajesh
 * Date: 23-Dec-17
 * Time: 11:19 PM
 */

for($i=1;$i<=4;$i++){

    for($j=4;$j>$i;$j--){

        echo '&nbsp&nbsp&nbsp';
    }
    for($s=1;$s<=$i*2-1;$s++){
        echo '*&nbsp';
    }
    echo '<br>';
}