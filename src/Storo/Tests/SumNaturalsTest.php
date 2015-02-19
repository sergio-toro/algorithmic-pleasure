<?php

namespace Storo\Tests;

use Storo\Math\SumNaturals;

class SumNaturalsTest extends \PHPUnit_Framework_TestCase
{

    public function testSumNaturalsInstance()
    {
        $sumNaturals = new SumNaturals();

        $this->assertTrue( $sumNaturals instanceof SumNaturals );

        return $sumNaturals;
    }

    /**
     * @depends testSumNaturalsInstance
     */
    public function testSumMultiplesResult(SumNaturals $sumNaturals)
    {
        $result = $sumNaturals->sumIfMultipleBelow(3, 5, 1000);

        $this->assertEquals(233168, $result);
    }

    /**
     * @depends testSumNaturalsInstance
     */
    public function testSumMultiplesExtraResult(SumNaturals $sumNaturals)
    {
        $result = $sumNaturals->sumIfMultipleBelow(3, 4, 1000);

        $this->assertEquals(249501, $result);
    }

}