<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class EchoNTimesCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:echo-n-times';

    protected function configure()
    {
        $this
            ->setName('echon')
            ->setDescription('echo string n-times')
            ->addArgument(
                'string',
                InputArgument::REQUIRED,
                'sting to output')
            ->addOption(
                'iterations',
                'i',
                InputArgument::OPTIONAL,
                'output times',
                2)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');
        $i = $input->getOption('iterations');

        while ($i > 0) {
            $output->writeln($string);
            $i--;
        }

        return Command::SUCCESS;
    }
}
