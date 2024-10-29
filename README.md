Clone o repositorio

git clone https://github.com/rafaelmarquesd/crud_biblioteca.git
cd crud_biblioteca

Instalar dependencias php

composer install

Instalar as dependencias do npm

npm install

Copie o arquivo .env.example para .env

cp .env.example .env

Gere uma chave de aplicacao

php artisan key:generate

Atualize os dados no arquivo .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sua_base_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

Execute as migrations

php artisan migrate

Para compilar os arquivos CSS e JavaScript

npm run dev

Inicie o servidor local

php artisan serve


Para acessar o projeto

http://localhost:8000