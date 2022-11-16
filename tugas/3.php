<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="display: flex; justify-content:center">
    <table border="1" style="width: 15%; text-align: center;">
        <tr style="background-color: yellow;">
            <td>X</td>
            <td>Y</td>
            <td>Z</td>
        </tr>
        <?php
        for ($x = 1; $x <= 3; $x++) {
            for ($y = 0; $y <= 2; $y++) {
                $z = $x * $y;
                echo "
            <tr>
                <td>$x</td>
                <td>$y</td>
                <td>$z</td>
            </tr>
            ";
            }
        }
        ?>
    </table>
</body>

</html>