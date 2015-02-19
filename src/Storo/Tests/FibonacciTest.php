<?php

namespace Storo\Tests;

use Storo\Math\Fibonacci;

class FibonacciTest extends \PHPUnit_Framework_TestCase
{

    public function testFibonacciInstance()
    {
        $fibonacci = new Fibonacci();

        $this->assertTrue( $fibonacci instanceof Fibonacci );

        return $fibonacci;
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testRecursiveResult(Fibonacci $fibonacci)
    {
        $result = $fibonacci->recursive(5);

        $this->assertEquals($result, 8);
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testIterativeResult(Fibonacci $fibonacci)
    {
        $result = $fibonacci->iterative(5);

        $this->assertEquals($result, 8);
    }

}