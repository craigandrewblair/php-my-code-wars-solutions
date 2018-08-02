<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function is_prime(int $n): bool {
            if($n <= 1){                
                return false;
            }
            $i = 2;
            while ($i < $n) {
                if ($n % $i === 0) {
                    return false;
                }
                $i++;
            }
            return true;
        }

        print_r(is_prime(7));
        ?>
    </body>
</html>


