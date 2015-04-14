<?php


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


    function bubblesort($a) {


        do {
            $unsorted = false;

            for ($i= 0 ; $i < count($a) -1 ; $i++) { 
                if ( $a[$i] < $a[$i+1] ) {
                    $t = $a[$i];
                    $a[$i] = $a[$i+1];
                    $a[$i+1] = $t;
                    $unsorted = true;
                }
            }
        } while($unsorted);

        return $a;
    }


    var_dump(bubblesort($array));

    $time_end = microtime_float();
    $time = $time_end - $time_start;

    echo "Did nothing in $time seconds\n";

// .022 seconds for 100 random elements
// over 30 seconds for 10,000 random elements

// bigO(n^2) time complexity
    // longest time to sort so far

?>