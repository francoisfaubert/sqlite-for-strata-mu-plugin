<?php

namespace Strata\MuPlugin\Sqlite;

use Strata\Strata;
use Exception;

/**
 * Sqlite Plugin initializer
 */
class PluginInitializer {

    public static function initialize()
    {
        if (!defined('WP_ENV')) {
            throw new Exception("Strata\MuPlugin\Sqlite can only run in a development environment.");
        }

        // Turn this off by declaring use MySQL elsewhere
        if (!defined('USE_MYSQL')) {

            // Only load our configuration in dev mode.
            if (strtolower(WP_ENV) === "development") {
                define('USE_MYSQL', false);
                if (!defined('DB_FILE')) {
                    define('DB_FILE', 'development.sqlite3');
                }
                if (!defined('DB_DIR')) {
                    define('DB_DIR', 'tmp');
                }
            } else {
                define('USE_MYSQL', true);
            }
        }

    }

}
