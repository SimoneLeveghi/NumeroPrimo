<?php 

    function isPrime(int $n) :bool {
        $k = ceil(sqrt( $n ));
        for( $i = 2; $i <= $k; ++$i ) {
            if($n % $i == 0 && $n != $i) {
                return false;
            }
        }
        return true;
    }
    function findFactors(int $n) : mixed {
        $factors = array(1);
        for( $i = 2; $i <= $n / 2; ++$i ) {
            if($n % $i == 0) {
                array_push( $factors, $i );
            }
        }
        array_push( $factors, $n);
        
        return $factors;
    }
?>