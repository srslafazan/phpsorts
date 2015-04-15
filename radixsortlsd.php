<?php

$arr = array();

for ($i = 0 ; $i < 10 ; $i++) {
    array_push($arr, rand(-500, 500));
}


function radixsortlsd($a){

    $d = 1;
    $b = [];

    for ( $i = 0 ; $i < count($a) ; $i++ ) {
        if ( strlen( (string)$a[$i] ) > $d ) {
            $d = strlen( (string)$a[$i] ); 
        }
    }

    for ( $i = 0 ; $i < $d ; $i++ ) {
        for ( $k = -9 ; $k < 10 ; $k++ ) {
            for ( $j = 0 ; $j < count($a) ; $j++ ) {
                if ( floor( ( $a[$j]/pow(10,$i) ) % 10 ) == $k ) {
                    array_push( $b, $a[$j] );
                }
            }
        }
        $a = $b;
        $b = array();
    }
    return $a;
}

var_dump(radixsortlsd($arr));

?>