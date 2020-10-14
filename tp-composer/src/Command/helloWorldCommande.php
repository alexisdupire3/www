<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class HelloWorldCommande extends Command
{

    protected static $defaultName = 'app:hello-world';

    protected function configure()
    {
       $this->setDescription(
           'Hello world command'
       );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('var/log.txt', Logger::WARNING));

        $log->warning("La commande s'est lancé avec un warning");
        $log->error("La commande ne s'est pas lancé");
        return Command::SUCCESS;
    }


}