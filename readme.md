## Laravel API Boilerplate for Laravel 5.8

Laravel API Boilerplate is a starter kit you can use to build your first API in seconds.

It is built on top of three big guys:

* JWT-Auth - [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth)
* Dingo API - [dingo/api](https://github.com/dingo/api)
* Laravel-CORS [barryvdh/laravel-cors](http://github.com/barryvdh/laravel-cors)


Instalação <br />
Windows: <br />
Instalar xamppp <br />
fazer downgrade do php <br />
https://www.devopsschool.com/blog/how-to-downgrade-php-from-8-0-0-to-7-1-32-in-xampp-8-0-0/ <br />

Instalar composer <br />
Criar pasta Laravel na pasta htdocs <br />
cd C:\xampp\htdocs\Laravel <br />

git clone https://github.com/andreitataru/PTI.back-end.git <br />
fazer cd lá para dentro <br />
composer install <br />
composer update <br />
abrir pasta no visual studio code e alterar o ficheiro ".env.example" para ".env" <br />
php artisan key:generate <br />
php artisan serve <br />
testar o url : http://127.0.0.1:8000/api/hello <br />

aceder ao http://localhost/phpmyadmin/ e criar uma base de dados "db" <br />
abrir o ficheiro .env no visual studio code e alterar os seguintes campos: <br />
DB_DATABASE=db <br />
DB_USERNAME=root <br />
DB_PASSWORD= <br />

aceder à pasta config abrir o ficheiro database.php <br />
e colocar o "mysql" assim <br />
        'mysql' => [ <br />
            'driver' => 'mysql', <br />
            'host' => env('DB_HOST', '127.0.0.1'), <br />
            'port' => env('DB_PORT', '3306'), <br />
            'database' => env('DB_DATABASE', 'db'), <br />
            'username' => env('DB_USERNAME', 'root'), <br />
            'password' => env('DB_PASSWORD', ''), <br />
            'charset' => 'utf8', <br />
            'collation' => 'utf8_unicode_ci', <br />
            'prefix' => '', <br />
            'strict' => true, <br />
            'engine' => null, <br />
        ], <br />

e por fim dar run a este comando que vai dar run às migrations e gerar as tabelas da base de dados: <br />
php artisan migrate <br />

para testar a api podemos usar o programa Postman <br />

