# CRUD Biblioteca 📚

CRUD Biblioteca é uma aplicação de gerenciamento de biblioteca construída com Laravel e Vue.js. Permite realizar operações básicas de cadastro, edição, exclusão e consulta de livros.

## 📋 Pré-requisitos

- PHP >= 7.4
- Composer
- Node.js

## 🚀 Como iniciar o projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/rafaelmarquesd/crud_biblioteca.git
cd crud_biblioteca 
```

### 2. Instalar as dependências

- PHP
```bash
composer install 
```
- NPM
```bash
npm install 
```

### 3. Configurar o ambiente

- Copie o arquivo .env.example para .env
```bash
cp .env.example .env
```
- Gere uma chave para a aplicação
```bash
php artisan key:generate
```

### 4. Configurar banco de dados

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sua_base_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```
### 5. Executar as migrações

```bash
php artisan migrate
```

### 6. Compilar os assets

```bash
npm run dev
```

### 7. Iniciar o servidor

```bash
php artisan serve
```

### 8. Acessar o projeto

Acesse no navegador:

http://localhost:8000

✨ Funcionalidades

Cadastro de livros 📚
Consulta de livros disponíveis 🔍
Edição e exclusão de registros ✏️