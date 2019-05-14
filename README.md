Job Board
=========

Setup Development Docker
------------------------

1. ``git clone git@github.com:thilinah/jobboard.git``
2. ``composer install``
3. During parameter file update make sure to use dh Host = db
4. Update ``.env`` file -> ``SYMFONY_APP_PATH`` with path to your project
5. Update ``.env`` file -> MYSQL configuration to match ``app/config/parameters.yml``
6. ``docker-compose up -d --build``


Running Symfony Commands
------------------------
1. Find the docker container name for php-fpm ``docker ps``
2. Usually this should be ``jobboard_php_1``
3. Any symfony console command can be runs as ``docker exec jobboard_php_1 php bin/console <command>``

Create Schema
-------------
1. ``docker exec jobboard_php_1 php bin/console doctrine:schema:drop --force``
2. ``docker exec jobboard_php_1 php bin/console doctrine:schema:create``
3. ``docker exec jobboard_php_1 php bin/console doctrine:schema:update --force``


Accessing Web App
-----------------
1. You can access the app via ``localhost``
2. If the port 80 is already occupied change it via ``docker-compose.yml`` nginx port mapping
3. Docker mysql db can be accessed via localhost port 3307 if required 
