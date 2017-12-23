<?php
/**
 * Created by RAjesh.
 * Date: 23-Dec-17
 * Time: 10:16 PM
 */

for($i=1;$i<=5;$i++){
    for($j=5;$j>$i;$j--){

        echo '&nbsp&nbsp';
    }

    for($k=1;$k<=$i;$k++){

        echo '*&nbsp';
    }echo '<br>';
}