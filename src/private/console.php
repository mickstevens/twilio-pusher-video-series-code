#!/usr/bin/env php
<?php

require_once __DIR__ . '/bootstrap.php';

$cli_application = new \Symfony\Component\Console\Application();

$commands = [
    '\CentralApps\Commands\PheanstalkStatsCommand',
    '\CentralApps\Commands\PheanstalkListCommand',
    '\CentralApps\Commands\PheanstalkPeekReadyCommand',
    '\CentralApps\Commands\PheanstalkDeleteCommand',
    '\CentralApps\Commands\PheanstalkFlushCommand',
];

$container = [
    'pheanstalk' => $pheanstalk(),
];

foreach ($commands as $command) {
    $command = new $command();

    if ($command instanceof CentralApps\Commands\AcceptsContainerInterface) {
        $command->setContainer($container);
    }

    $cli_application->add($command);
}

$cli_application->run();
