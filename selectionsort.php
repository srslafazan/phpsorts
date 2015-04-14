<?php


    /*
    1 - SET _$i_ to be _0_ 
    2 - Go to line __
    3 - Print __ 
    4 - If __ or __ is __ __ do {__}

    */
    $array = array();

    for ($k = 0 ; $k < 100 ; $k++) {
        array_push($array, rand(0, 10000));
    }

    function microtime_float()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    $time_start = microtime_float();

    function selectionsort($a){
      
        // loop thru, swap current with smallest

        for ($i= 0; $i < count($a) - 1 - $i ; $i++) { 
            $sm = $a[$i];
            $si = $i;
            $lg = $a[$i];
            $li = $i;
            for ($j=$i+1; $j < count($a)-1 - $i; $j++) { 

                if ($a[$j] < $sm){
                    $sm = $a[$j];
                    $si = $j;

                }

                if ($a[$j] > $lg){
                    $lg = $a[$j]; 
                    $li = $j;               
                }
            } 

            $a[$si] = $a[$i];
            $a[$i] = $sm;

            $a[$li] = $a[count($a) -1 - $i];
            $a[count($a) - $i - 1] = $lg;
        }

        return $a;
    }

    var_dump(selectionsort($array));

    $time_end = microtime_float();
    $time = $time_end - $time_start;

    echo "Did nothing in $time seconds\n";

// time complexity of O(n^2)
// for 10,000 values, maximum execution time of 30 seconds exceeded
?>