<!--In this kata you get the start number and the end number of a region and should return the count of all numbers except numbers with a 5 in it. The start and the end number are both inclusive!

Examples:

1,9 -> 1,2,3,4,6,7,8,9 -> Result 8
4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Don't give me five!</title>
    </head>
    <body>
        <?php

        function dont_give_me_five($start, $end) {
            $rangeArr = range($start, $end);
            $fiveArr = [];
//            print_r($rangeArr);
            foreach($rangeArr as $value){
                $str = $value . "";
//                print_r(gettype($str));
//                print_r($str);
                if(strpos($str, '5')!== false){
                    array_push($fiveArr, $value);
                }
            }
            echo '<pre>';
            print_r(array_diff($rangeArr, $fiveArr));
            echo '</pre>';
            $count = count(array_diff($rangeArr, $fiveArr));
            echo $count;
        }
        dont_give_me_five(1, 25);
        ?>
    </body>
</html>
