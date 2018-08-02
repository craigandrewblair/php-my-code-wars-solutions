<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function findNb($m) {
            
            $bricksLeft = $m;
            $count = 1;
            $cube = 1;
            
            while ($count <= $m) {
                $cube = pow($count, 3);
                $bricksLeft -= $cube;
                if($bricksLeft < 0){
                    echo "Incorrect number of bricks.";
                    return -1;
                }
                if($bricksLeft === 0){
                    echo "$count cube building using $m bricks.";
                    return $count;
                }             
                $count++;
            }
        }

        findNb(100);
        ?>
    </body>
</html>
