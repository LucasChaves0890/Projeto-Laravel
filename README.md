Projeto Laravel

Bem-vindo ao meu primeiro projeto Laravel! Este é um breve resumo do que o projeto se trata, suas funcionalidades principais e como você pode começar a usá-lo.

## Descrição do Projeto

Este projeto é uma aplicação web construída utilizando o framework Laravel. [Laravel](https://laravel.com/) é um framework PHP poderoso e elegante, que permite o desenvolvimento rápido de aplicativos web modernos.

## Funcionalidades Principais

- [x] Cadastro de usuários
- [x] Autenticação de usuários
- [x] Criação, edição e exclusão de Séries, contendo temporadas e episodios
- [X] Upload de imagens
- [X] Marcar Episodios como visto, ou não visto
- [x] Integração com banco de dados
- [x] Manipulação de formulários
- [x] Rotas amigáveis e RESTful
- [x] Utilização de migrations e seeds para gerenciamento de banco de dados
- [x] Criação de Api
- [X] Envios de Email após a criação de uma série

## Instalação e Uso

git clone https://github.com/LucasChaves0890/Projeto-Laravel.git
Instale as dependências do projeto:

composer install

Configure o arquivo .env com as informações do seu ambiente, incluindo a conexão com o banco de dados.

Gere a chave de aplicação:
php artisan key:generate

Execute as migrações do banco de dados:
php artisan migrate

Inicie o servidor de desenvolvimento:
php artisan serve

Acesse a aplicação em seu navegador web em http://localhost:8000.
