<?php

namespace Storo\Math;

class Fibonacci
{
    /**
     * Calculate fibonacci in a iterative way
     * @param  integer $number
     * @return Generator
     *
     */
    public function iterativeGenerator($number)
    {
        if ($number<=0) {
            yield 0;
        }
        else {
            yield 1;

            $a = 0;
            $b = 1;
            for ($i=1; $i < $number; $i++) {
                $aux = $a + $b;
                $a   = $b;
                $b   = $aux;
                yield $aux;
            }
        }
    }

    /**
     * Calculate fibonacci in a recursive way
     * @param  integer $number
     * @param  array   $list   Computed fibonacci values
     * @return integer
     */
    public function recursive($number, &$list = [])
    {
        if ($number<=0) {
            return 0;
        }

        if ($number==1) {
            $list[$number] = 1;
            return 1;
        }

        // Check if number already computed
        if (isset($list[$number])) {
            return $list[$number];
        }
        $list[$number] = $this->recursive($number-1, $list) +
            $this->recursive($number-2, $list)
        ;
        return $list[$number];
    }

    /**
     * Calculate fibonacci in a iterative way
     * @param  integer $number
     * @return integer
     */
    public function iterative($number, &$list = [])
    {
        if ($number<=0) {
            return 0;
        }

        if ($number==1) {
            $list[$number] = 1;
            return 1;
        }

        $list  = [ 1 => 1, 2=> 1 ];
        for ($i=3; $i <= $number; $i++) {
            $list[$i] = $list[$i-1] + $list[$i-2];
        }

        return $list[$number];
    }
}