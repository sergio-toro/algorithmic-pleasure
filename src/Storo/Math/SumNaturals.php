<?php

namespace Storo\Math;

use Storo\Math\SumNaturals;


class SumNaturals
{
    /**
     * Returns the sum of all natural numbers below $limit that are multiples of $a or 5$b.
     * @param  integer $a      First number to check
     * @param  integer $b      Second number to check
     * @param  integer $limit  Limit number
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

        return $total;
    }
}