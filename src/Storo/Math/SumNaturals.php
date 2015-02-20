<?php

namespace Storo\Math;

class SumNaturals
{
    /**
     * Returns the sum of all natural numbers below $limit that are
     * multiples of $a or $b, not in a efficient way.
     * @param  integer $a
     * @param  integer $b
     * @param  integer $limit
     * @return integer
     */
    public function sumIfMultipleBelow($a, $b, $limit = 1000)
    {
        $total = 0;
        $start = $a<$b ? $a : $b;

        for ($i = $start; $i < $limit; $i++) {
            if ( ($i % $a===0) || ($i % $b===0) ) {
                $total += $i;
            }
        }

        return (integer) $total;
    }

    /**
     * Returns the sum of all natural numbers below $limit that are
     * multiples of $a or $b in a efficient way.
     * @param  integer $a
     * @param  integer $b
     * @param  integer $limit
     * @return integer
     */
    public function getSumOfMultiplesOfAOrB($a, $b, $limit = 1000)
    {
        if ($a%$b==0 || $b%$a==0) {
            return $this->sumMul($limit, ($a<$b ? $a : $b));
        }
        else {
            return (integer) $this->sumMul($limit, $a) +
                $this->sumMul($limit, $b) -
                $this->sumMul($limit, $this->mcm($a,$b))
            ;
        }
    }


    /**
     * Returns the sum of all natural numbers below $limit that are
     * multiples of $number
     * @param  integer $limit
     * @param  integer $number
     * @return integer
     */
    private function sumMul($limit, $number)
    {
        $greatestMultiple = $limit-1;
        while ($greatestMultiple%$number != 0) {
            $greatestMultiple--;
        }
        $last = $greatestMultiple / $number;
        return (integer) $number * $last * ($last + 1) / 2;
    }

    /**
     * Returns the minimum common divisor of two numbers
     * @param  integer $a
     * @param  integer $b
     * @return integer
     */
    private function mcd($a, $b) {
        while (($a % $b) != 0) {
            $c = $b;
            $b = $a % $b;
            $a = $c;
        }
        return (integer) $b;
    }

    /**
     * Returns the minimum common multiple of two numbers
     * @param  integer $a
     * @param  integer $b
     * @return integer
     */
    private function mcm($a, $b) {
        return (integer) ($a * $b) / $this->mcd($a,$b);
    }
}