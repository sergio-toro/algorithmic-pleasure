<?php

namespace Storo\Command;

use Storo\Math\Fibonacci;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FibonacciCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('storo:fibonacci')
            ->setDescription('​Prints `howMany` fibonacci series.')
            ->addArgument(
                'howMany',
                InputArgument::OPTIONAL,
                '',
                10
            )
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $howMany = $input->getArgument('howMany', 10);

        $fibonacci = new Fibonacci();

        $result = $fibonacci->recursive($howMany, $list);
        $list = implode(', ', $list);

        $output->writeln("<info>Result:</info> {$list}.");
    }
}