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

        $this->assertEquals(5, $result);
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testRecursiveResult2(Fibonacci $fibonacci)
    {
        $result = $fibonacci->recursive(8);

        $this->assertEquals(21, $result);
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testRecursiveResult3(Fibonacci $fibonacci)
    {
        $result = $fibonacci->recursive(10);

        $this->assertEquals(55, $result);
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testRecursiveResult4(Fibonacci $fibonacci)
    {
        $result = $fibonacci->recursive(14);

        $this->assertEquals(377, $result);
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testIterativeResult(Fibonacci $fibonacci)
    {
        $result = $fibonacci->iterative(5);

        $this->assertEquals(5, $result);
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testIterativeResult2(Fibonacci $fibonacci)
    {
        $result = $fibonacci->iterative(8);

        $this->assertEquals(21, $result);
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testIterativeResult3(Fibonacci $fibonacci)
    {
        $result = $fibonacci->iterative(10);

        $this->assertEquals(55, $result);
    }

    /**
     * @depends testFibonacciInstance
     */
    public function testIterativeResult4(Fibonacci $fibonacci)
    {
        $result = $fibonacci->iterative(14);

        $this->assertEquals(377, $result);
    }

}