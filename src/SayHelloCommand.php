<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    protected static $defaultName = 'app:say-hello';

    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('Say Hello to ')
            ->addArgument('string', InputArgument::REQUIRED, 'say hello to')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');
        $output->writeln('Hello ' . $string);
        return Command::SUCCESS;
    }
}

