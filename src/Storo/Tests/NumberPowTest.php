<?php

namespace Storo\Tests;

use Storo\Math\NumberPow;

class NumberPowTest extends \PHPUnit_Framework_TestCase
{

    public function testNumberPowInstance()
    {
        $numberPow = new NumberPow();

        $this->assertTrue( $numberPow instanceof NumberPow );

        return $numberPow;
    }

    /**
     * @depends testNumberPowInstance
     */
    public function testMultiplyResult1(NumberPow $numberPow)
    {
        $result = $numberPow->multiply(5, 3);

        $this->assertEquals($result, 5 * 3);
    }

    /**
     * @depends testNumberPowInstance
     */
    public function testMultiplyResult2(NumberPow $numberPow)
    {
        $result = $numberPow->multiply(20, 50);

        $this->assertEquals($result, 20 * 50);
    }

    /**
     * @depends testNumberPowInstance
     */
    public function testPowResult1(NumberPow $numberPow)
    {
        $result = $numberPow->pow(5, 3);

        $this->assertEquals($result, pow(5, 3));
    }

    /**
     * @depends testNumberPowInstance
     */
    public function testPowResult2(NumberPow $numberPow)
    {
        $result = $numberPow->pow(8, 4);

        $this->assertEquals($result, pow(8, 4));
    }

}