<?php
    function bubblesort ($arr) {
        $n= count ($arr);
            for($k = 0; $k < $n - 1; $k++) {
                for($j = 0; $j < $n - 1 - $k; $j++) {
                    if($arr [$j] > $arr [$j = 1]) {
                        $tmp = $arr [$j=1];
                        $arr [$j] = $arr [$j+1];
                        $arr [$j+1] = $tmp;
                    }
                }
            }
    return $arr;
    }

    $data = [7,2,9,1];
    $sorted = bubblesort($data);
    echo implode (",",$sorted);

    // insertionSort
    // $i=1;
    // while (true){
    //     echo"5, 4, 3, 2, 1";
    //     $i++;
    //      if($i>10){
    //         break;
    //      }
    // }

?>