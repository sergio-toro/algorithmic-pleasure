<?php

namespace Storo\Command;

use Storo\Math\SumNaturals;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SumMultiplesExtraCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('storo:sum-multiples-extra')
            ->setDescription('​The sum of all natural numbers below 10​00 that are multiples of 3 or 4.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sumNaturals = new SumNaturals();

        $result = $sumNaturals->getSumOfMultiplesOfAOrB(3, 4, 1000);

        $output->writeln("<info>Result:</info> {$result}");
    }
}