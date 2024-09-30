<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Primo</title>
</head>
    <body>
        <h1>Numero Primo</h1>
        <form action="index.php" method="GET">
            <input name="n" type="number" value="<?php echo $_GET["n"] ?>" required>
            <input type="submit" value="Calcola">
        </form>
        <?php
            require "functions.php";

            $n = $_GET["n"] ?? 0;
            
            if(!isPrime($n)){
                echo "<p>Fattori</p>";
                $factors = findFactors($n);
                $len = count($factors);
                for($i = 0; $i < $len; $i++) {
                    echo $factors[$i];
                    if($i < $len - 1) echo ", ";
                }
            }
            else {
                echo "<p>Il numero è primo</p>";
            }
        ?>
    </body>
</html>