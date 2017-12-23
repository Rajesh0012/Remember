<?php
/**
 * Created by Rajesh.
 * Date: 23-Dec-17
 * Time: 10:32 PM
 */

for($i=1;$i<=5;$i++){


    for ($j=1;$j<=$i;$j++){

        echo '&nbsp&nbsp&nbsp';
    }

    for ($s=5;$s>=$i;$s--){

        echo '*&nbsp';
    }

    echo '<br>';
}