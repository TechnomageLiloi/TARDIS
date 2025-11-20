<?php

namespace Liloi\TARDIS\API\Admin\Database\Dump;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Manager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $this->checkAccess();

        $db = Manager::getConfig()->get('connection');

        $mysqlDatabaseName = $db['database'];
        $mysqlUserName = $db['user'];
        $mysqlPassword = $db['password'];
        $mysqlHostName = $db['host'];

        $mysqlExportPath = ROOT_PATH . '/Install/Dump/Battle.sql';
        $command = "mysqldump --opt -h{$mysqlHostName} -u{$mysqlUserName} -p{$mysqlPassword} {$mysqlDatabaseName} > {$mysqlExportPath}";
        exec($command, $output, $worked);

        return [

        ];
    }
}