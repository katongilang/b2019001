<?php

namespace DNApp\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class BuyDomainCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('buy:domain')
            ->setDescription('Process batch domain order')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // TODO: Here
    }
}
