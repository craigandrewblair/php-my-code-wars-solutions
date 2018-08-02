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
            $nArr = [];
            for($i=2;$i<$n;$i++){
                $nArr[$i] = $n%$i;
            }
            if (in_array(0, $nArr)) {
                echo "This is NOT a prime";
                return false;
            }else{           
                echo "This IS a prime";
                return true;
            }
            echo '<pre>';
            print_r($nArr);
            echo '</pre>';
            $arrSize = sizeof($nArr);          
            echo "Memory Usage: " . memory_get_peak_usage(true);
            echo '<br>';
        }

        print_r(is_prime(10));
            
        ?>
    </body>
</html>


