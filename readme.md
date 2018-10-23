## Crud Laravel + mongobd

Crud básico com Laravel framework e mongodb que é um banco de dados orientado a documentos NoSQL

## Tecnologias

- Laravel Framework 5.7.9
- Mongodb v3.6.3
- Jenssegers/mongodb 3.4 [A MongoDB based Eloquent model and Query builder for Laravel]

## Configuração

Adicionar configuração de conexão com o mongodb dentro do arquivo .env

    MONGO_DB_HOST=127.0.0.1
    MONGO_DB_PORT=27017
    MONGO_DB_DATABASE=laravel-mongodb-crud
    MONGO_DB_USERNAME=
    MONGO_DB_PASSWORD=

## Instalação

    - git clone https://github.com/jamirperoba/laravel-mongodb-crud.git
    - composer install
    - php artisan key:generate
    - php artisan serve


