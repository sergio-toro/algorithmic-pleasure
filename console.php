#!/usr/bin/env php
<?php
require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\Console\Application;

use Storo\Command\SumMultiplesCommand;
use Storo\Command\SumMultiplesExtraCommand;
use Storo\Command\NumberPowCommand;
use Storo\Command\FibonacciCommand;

$console = new Application();

$console->add(new SumMultiplesCommand);
$console->add(new SumMultiplesExtraCommand);
$console->add(new NumberPowCommand);
$console->add(new FibonacciCommand);

$console->run();