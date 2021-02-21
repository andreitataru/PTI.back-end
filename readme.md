## Laravel API Boilerplate for Laravel 5.8

Laravel API Boilerplate is a starter kit you can use to build your first API in seconds.

It is built on top of three big guys:

* JWT-Auth - [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth)
* Dingo API - [dingo/api](https://github.com/dingo/api)
* Laravel-CORS [barryvdh/laravel-cors](http://github.com/barryvdh/laravel-cors)


Instalação \
Windows: \
Instalar xamppp \
fazer downgrade do php \
https://www.devopsschool.com/blog/how-to-downgrade-php-from-8-0-0-to-7-1-32-in-xampp-8-0-0/ \

Instalar composer \
Criar pasta Laravel na pasta htdocs \
cd C:\xampp\htdocs\Laravel \

git clone https://github.com/andreitataru/PTI.back-end.git \
fazer cd lá para dentro \
composer install \
composer update \
abrir pasta no visual studio code e alterar o ficheiro ".env.example" para ".env" \
php artisan key:generate \
php artisan serve \
testar o url : http://127.0.0.1:8000/api/hello \

aceder ao http://localhost/phpmyadmin/ e criar uma base de dados "db" \
abrir o ficheiro .env no visual studio code e alterar os seguintes campos: \
DB_DATABASE=db \
DB_USERNAME=root \
DB_PASSWORD= \

aceder à pasta config abrir o ficheiro database.php \
e colocar o "mysql" assim \     
        'mysql' => [ \
            'driver' => 'mysql', \
            'host' => env('DB_HOST', '127.0.0.1'), \
            'port' => env('DB_PORT', '3306'), \
            'database' => env('DB_DATABASE', 'db'), \
            'username' => env('DB_USERNAME', 'root'), \
            'password' => env('DB_PASSWORD', ''), \
            'charset' => 'utf8', \
            'collation' => 'utf8_unicode_ci', \
            'prefix' => '', \
            'strict' => true, \
            'engine' => null, \
        ], \

e por fim dar run a este comando que vai dar run às migrations e gerar as tabelas da base de dados: \
php artisan migrate \

para testar a api podemos usar o programa Postman \

