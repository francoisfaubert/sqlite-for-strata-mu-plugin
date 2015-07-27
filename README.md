* This plugin is not ready for general use yet. *

# SQlite for Strata

Using the SQlite for Strata MU-Plugin, [Strata](http://strata.francoisfaubert.com/) can be ran on a local SQlite database to complete the project requirement abstraction.

*Note that there is currently no automated way of importing `.sql` dumps form MySQL into a SQlite database or vice-versa.* Though this is the goal of the project.

# Installation

This plugin will only run when `WP_ENV` is set to `development` mode. Therefore, you can add it to the `require-dev` section of your Strata project's `composer.json` file using the `require` command.

~~~ sh
$ composer require francoisfaubert/sqlite-for-strata-mu-plugin --dev
~~~

If you are getting unsolved requirement errors, ensure your project's `composer.json` files knows about WPackagist. This is where Wordpress plugins are being versioned for use alongside Composer.

~~~ sh
$ composer config repositories.wpackagist composer http://wpackagist.org
~~~

Once created and running, the SQlite database is accessible at `~/tmp/development.sqlite3` and can be edited using standard methods.

## Configuration

A list of constants can be defined to customize the installation.

* `USE_MYSQL` : A boolean to force the use of MySQL even though this plugin is running.
* `DB_FILE` : The name of the sqlite database. Defaults to `development.sqlite3`.
* `DB_DIR` : The name of the sqlite directory. Defaults to `tmp`.
