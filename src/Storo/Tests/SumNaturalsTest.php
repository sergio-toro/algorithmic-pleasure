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

    /**
     * @depends testSumNaturalsInstance
     */
    public function testSumEfficientMultiplesIntegrity(SumNaturals $sumNaturals)
    {
        for ($i=2; $i <= 20; $i++) {
            for ($j=2; $j <= 20; $j++) {
                if ($i!=$j) {
                    $resultA = $sumNaturals->sumIfMultipleBelow($i, $j, 1000);
                    $resultB = $sumNaturals->getSumOfMultiplesOfAOrB($i, $j, 1000);

                    $this->assertEquals($resultA, $resultB, "Multiples integrity: $i, $j");
                }
            }
        }

    }


    /**
     * @depends testSumNaturalsInstance
     */
    public function testSumEfficientMultiplesResult(SumNaturals $sumNaturals)
    {
        $result = $sumNaturals->getSumOfMultiplesOfAOrB(3, 5, 1000);

        $this->assertEquals(233168, $result);
    }

    /**
     * @depends testSumNaturalsInstance
     */
    public function testSumEfficientMultiplesExtraResult(SumNaturals $sumNaturals)
    {
        $result = $sumNaturals->getSumOfMultiplesOfAOrB(3, 4, 1000);

        $this->assertEquals(249501, $result);
    }

}