#!/usr/bin/env php
<?php
require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\Console\Application;

use Storo\Command\SumMultiplesCommand;
use Storo\Command\SumMultiplesExtraCommand;

$console = new Application();

$console->add(new SumMultiplesCommand);
$console->add(new SumMultiplesExtraCommand);

$console->run();