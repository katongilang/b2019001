<?php 
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application('domainesia', '1.0.0');

// Commands
$application->add(new \DNApp\Commands\BuyDomainCommand);

$application->run();
