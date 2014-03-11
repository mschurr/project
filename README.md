project
=======

This repository contains project files for my PHP framework.

Requirements:
* Composer (http://getcomposer.org)
* PHP >= 5.3.0

To use this,
* Clone the repository
* Run `composer install`
* To use a database, set up the database and execute `vendor/mschurr/framework/src/schema.sql`
* Place the configuration information in `config-template.php` and rename the file to `config.php`
* Run the development server for testing `php -S localhost:80 server.php`
* Deploy using HipHop `./hhvm.sh` or any PHP-enabled web server

Requirements:
* Composer
* MySQL
* PHP >= 5.5