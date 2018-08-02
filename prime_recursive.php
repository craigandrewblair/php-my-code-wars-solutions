<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function is_prime(int $n): bool {
            if ($n <= 1) {
                echo "Memory Usage: " . memory_get_peak_usage(true);
                return false;
            }
            for($i=2;$i<$n;$i++){
                if($n%$i == 0){
                    echo "Memory Usage: " . memory_get_peak_usage(true);
                    return false;
                }
            }
            echo "Memory Usage: " . memory_get_peak_usage(true);
            echo '<br>';
            return true;
        }

        print_r(is_prime(102002));
            
        ?>
    </body>
</html>


