<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function findNb($m) {
            $count = 1;
            $cube = 1;
            while ($count <= 10) {
                $cube = $count * $count * $count;
                echo "count: $count cube: $cube <br>";
                $count++;
            }
        }

        findNb(64);
        ?>
    </body>
</html>
