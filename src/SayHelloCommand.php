<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    // the name of the command (the part after "bin/console")
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
        // ... put here the code to run in your command
        $string = $input->getArgument('string');
        $output->writeln('Hello ' . $string . PHP_EOL);
        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))
        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;
    }
}

