<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class FullnameSurvey extends Command
{
    protected static $defaultName = 'app:fullname-survey';

    protected function configure()
    {
        $this
            ->setName('survey')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $question = new Question('Введите ваше имя:');
        $name = $helper->ask($input, $output, $question);

        $question = new Question('Введите ваш возраст: ');
        $age = $helper->ask($input, $output, $question);

        $question = new ChoiceQuestion(
            'Выберите ваш пол:',
            ['М', 'Ж']
        );
        $sex = $helper->ask($input, $output, $question);

        $output->writeln(
            'Здравствуйте ' . $name
            . ' Ваш возраст: ' . $age
            . 'Ваш пол: '. $sex
        );
        return Command::SUCCESS;
    }
}
