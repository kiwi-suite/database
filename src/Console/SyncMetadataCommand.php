<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Database\Console;

use Doctrine\Migrations\DependencyFactory;

class SyncMetadataCommand extends ProxyCommand
{
    public function __construct(DependencyFactory $dependencyFactory)
    {
        $this->command = new \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand($dependencyFactory);
        $this->command->setName(self::getCommandName());

        parent::__construct(null);
    }

    public static function getCommandName()
    {
        return 'migration:sync-metadata-storage';
    }
}
