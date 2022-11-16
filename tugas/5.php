<?php 
$bilangan = 100;
$pentuan = $bilangan % 2;
if ($pentuan == 0) {
    $status = "genap";
}else{
    $status = "ganjil";
}
echo "Bilangan $bilangan adalah bilangan $status";
?>