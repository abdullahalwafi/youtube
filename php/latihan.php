<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP Dasar</title>
</head>

<body>
    <form action="" method="post">
        <label for="suku">Masukan Suku banyak</label><br>
        <input type="number" name="suku" id="suku">
        <input type="submit" value="kirim" name="kirim">
        <input type="submit" value="genap" name="genap">
        <input type="submit" value="ganjil" name="ganjil">
        <input type="submit" value="prima" name="prima">
    </form>
    <?php

    if (isset($_POST["kirim"])) {

        $suku = $_POST['suku'];
        echo 'Suku yang diinput ' . $suku . "<br>";
        $bilangan1 = 0;
        $bilangan2 = 1;
        // 
        for ($i = 0; $i <= $suku; $i++) {
            echo $i;
        }
        echo "<br>";
        for ($i = 3; $i <= $suku; $i++) {
            $bilanganberikut = $bilangan1 + $bilangan2;
            $bilangan1 = $bilangan2;
            $bilangan2 = $bilanganberikut;
            echo $bilanganberikut;
        }
    } elseif (isset($_POST["genap"])) {
        $suku = $_POST['suku'];
        for ($i = 2; $i <= $suku; $i += 2) {
            echo $i;
        }
    } elseif (isset($_POST["ganjil"])) {
        $suku = $_POST['suku'];
        for ($i = 1; $i <= $suku; $i += 2) {
            echo $i;
        }
    } else {
        echo "Keterangan gak ada";
    }
    ?>
</body>

</html>