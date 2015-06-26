<?php

namespace Strata\MuPlugin\Sqlite;

use Strata\Strata;

/**
 * Sqlite Plugin initializer
 */
class PluginInitializer {

    public static function initialize()
    {
        if (defined("WPDB_DRIVER") && strtolower(WPDB_DRIVER) === 'sqlite') {
            $path = array(Strata::getMUPluginsPath() . "wp-db-driver", "db.php");
            require_once(implode(DIRECTORY_SEPERATOR, $path));
        }
    }

}
