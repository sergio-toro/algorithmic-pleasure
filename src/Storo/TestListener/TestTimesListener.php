<?php

namespace Storo\TestListener;

use PHPUnit_Framework_AssertionFailedError;
use PHPUnit_Framework_TestListener;
use PHPUnit_Framework_TestSuite;
use PHPUnit_Framework_Test;
use Exception;

class TestTimesListener implements PHPUnit_Framework_TestListener
{
    private $start;
    private $timeLimit = 0;

    public function startTest(PHPUnit_Framework_Test $test) {
        $this->start = microtime(true);
    }

    public function endTest(PHPUnit_Framework_Test $test, $time) {
        $end  = microtime(true);
        $took = round(($end-$this->start)*1000, 4);

        if ($took > $this->timeLimit)
        {
            echo "\n{$took} ms {$test->getName()}";
        }
    }

    public function addError(PHPUnit_Framework_Test $test, Exception $e, $time) {}
    public function addFailure(PHPUnit_Framework_Test $test, PHPUnit_Framework_AssertionFailedError $e, $time) {}
    public function addIncompleteTest(PHPUnit_Framework_Test $test, Exception $e, $time){}
    public function addSkippedTest(PHPUnit_Framework_Test $test, Exception $e, $time) {}
    public function startTestSuite(PHPUnit_Framework_TestSuite $suite) {}
    public function endTestSuite(PHPUnit_Framework_TestSuite $suite) {}
    public function addRiskyTest(PHPUnit_Framework_Test $test, Exception $e, $time) {}
}