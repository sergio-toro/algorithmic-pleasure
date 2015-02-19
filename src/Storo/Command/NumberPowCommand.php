<?php

namespace Storo\Command;

use Storo\Math\NumberPow;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NumberPowCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('storo:number-pow')
            ->setDescription('​Calculates the power of a number `a` to index `power`.')
            ->addArgument(
                'number',
                InputArgument::REQUIRED
            )
            ->addArgument(
                'power',
                InputArgument::REQUIRED
            )
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $number = $input->getArgument('number');
        $power  = $input->getArgument('power');

        $numberPow = new NumberPow();

        $result = $numberPow->pow($number, $power);

        $output->writeln("<info>Result:</info> {$result}");
    }
}