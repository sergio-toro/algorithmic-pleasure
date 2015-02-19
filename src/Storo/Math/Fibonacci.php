<?php

namespace Storo\Math;

class Fibonacci
{
    /**
     * Calculate fibonacci in a recursive way
     * @param  integer $number
     * @return integer
     */
    public function recursive($number)
    {
        if ($number===0) {
            return 0;
        }

        if ($number===1) {
            return 1;
        }

        return $this->recursive($number-1) + $this->recursive($number-2);
    }

    /**
     * Calculate fibonacci in a iterative way
     * @param  integer $number
     * @return integer
     */
    public function iterative($number)
    {
        $aux   = 1;
        $total = 1;

        for ($i=3; $i <= $number; $i++) {
            $temp = $aux + $total;
            $aux  = $total;

            $total = $temp;
        }

        return $total;
    }
}