<h1 align="center"> Sarlon Zuva (Booking portal) </h1>

## Installation

Download Symfony form <a href="https://symfony.com/download">Here</a>

Download Composer 

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Exceute the Below commands in the working directory

```
composer install
```


Copy .env.example to .env
```
copy .env.example .env
```


Create a database(if not created) and enter the db name in the .env file provided


Migrating table to database

```
symfony console doctrine:migrations:migrate
```

Seeding the Database with Admin Credentials

```
php bin/console doctrine:fixtures:load
```
Now you are good to go

```
symfony server:start
```

## Admin Credentials

Email: admin@admin.com | Password: password

