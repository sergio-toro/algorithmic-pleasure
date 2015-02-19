<?php

namespace Storo\Math;

class NumberPow
{
    /**
     * Returns the power of a number $a to index $power
     * @param  integer $a
     * @param  integer $power
     * @return integer
     */
    public function pow($a, $power)
    {
        if ($power) {
            $previousPower = $this->pow($a, $power-1);
            return $this->multiply($a, $previousPower);
        }

        return 1;
    }

    /**
     * Multiply two numbers
     * @param  integer $a
     * @param  integer $b
     * @return integer
     */
    public function multiply($a, $b)
    {
        if ($b) {
            return $a + $this->multiply($a, $b-1);
        }

        return 0;
    }
}