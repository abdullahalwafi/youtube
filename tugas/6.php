<?php
function terbesar($a,$d){
    if ($a > $d) {
        $max = $a;
    } else{
        $max = $d;
    }
    echo "bilangan terbesar antara $a dan $d adalah bilangan $max";
}
terbesar(15, 20)

?>