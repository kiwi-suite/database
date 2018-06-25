<?php
/**
 * kiwi-suite/database (https://github.com/kiwi-suite/database)
 *
 * @package kiwi-suite/database
 * @see https://github.com/kiwi-suite/database
 * @copyright Copyright (c) 2010 - 2017 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);
namespace KiwiSuite\Database\Command;

use Doctrine\DBAL\Migrations\Configuration\Configuration;

class GenerateCommand extends ProxyCommand
{
    public function __construct(Configuration $migrationConfig)
    {
        $this->command = new \Doctrine\DBAL\Migrations\Tools\Console\Command\GenerateCommand();
        $this->command->setMigrationConfiguration($migrationConfig);
        $this->command->setName(self::getCommandName());

        parent::__construct(null);
    }

    public static function getCommandName()
    {
        return 'migration:generate';
    }
}
