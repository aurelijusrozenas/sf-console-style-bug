<?php

declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class TestCommand extends Command
{
    protected static $defaultName = 'test';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $outputStyle = new OutputFormatterStyle('red', 'yellow', ['bold', 'blink']);
        $output->getFormatter()->setStyle('fire', $outputStyle);
        $string = '<fire>foo</fire>';

        $output->writeln($string.' <---- text style work fine, always');

        $question = new Question($string.' <---- text style does NOT work since 5.1.9. Press enter to finish.');
        $helper = $this->getHelper('question');
        $helper->ask($input, $output, $question); // <---- text style does NOT work since 5.1.9

        return 0;
    }
}
