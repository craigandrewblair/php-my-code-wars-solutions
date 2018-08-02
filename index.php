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
                return false;
            }
            $nArr = new SplFixedArray($n);
            $arrSize = sizeof($nArr);
            for($i=2; $i<$arrSize; $i++){
                print_r($i . "<br>");
                if ($n % $i === 0) {
                    return false;
                }
            }
            return true;
        }
        print_r(is_prime(107));
        
//            if ($n <= 1) {
//                return false;
//            }
//            for ($i = 2; $i <= $n - 1; $i++) {
//                if ($n % $i === 0) {
//                    return false;
//                }
//            }
//            return true;
        
        ?>
    </body>
</html>
