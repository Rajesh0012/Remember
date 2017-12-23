<?php
/**
 * Created by Rajesh.
 * Date: 23-Dec-17
 * Time: 10:10 PM
 */

 $a=1;
 $b=2;
echo $a.'<br>'.$b.'<br>';
for($i=1;$i<=12;$i++){

    $c=$a+$b;
    $a=$b;
    $b=$c;
    echo $c.'<br/>';



}