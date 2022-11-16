<?php 
$bilangan = -10;

if ($bilangan > 0) {
    $status = "positf";
}elseif ($bilangan < 0) {
    $status = "negatif";
}
echo "bilangan $bilangan merupakan bilangan $status";

?>