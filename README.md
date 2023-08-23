# CRUD de Funcionários com Laravel

Bem-vindo ao projeto de um CRUD (Create, Read, Update, Delete) de Funcionários desenvolvido com o framework Laravel. Este projeto permite a criação, leitura, atualização e exclusão de registros de funcionários, com informações como nome, e-mail, CPF e data de contratação.

## Recursos

- Cadastro de funcionários com campos: nome, e-mail, CPF e data de contratação.
- Listagem de todos os funcionários registrados.
- Atualização de informações de funcionários existentes.
- Exclusão de registros de funcionários.

## Requisitos

- PHP (>= versão 7.4)
- Composer
- Banco de dados MySQL (ou outro compatível com Laravel)

## Instalação

1. Clone este repositório para o seu ambiente local:

   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
Navegue até o diretório do projeto:

bash

cd nome-do-projeto

Instale as dependências do Composer:

bash

composer install

Crie um arquivo .env a partir do arquivo .env.example e configure a conexão do banco de dados.

Gere a chave de aplicação:

bash

php artisan key:generate

Execute as migrações do banco de dados para criar as tabelas necessárias:

bash

php artisan migrate

Inicie o servidor de desenvolvimento:

bash

    php artisan serve

    O aplicativo estará disponível em http://localhost:8000.

Uso

    Acesse a aplicação em seu navegador.

    Cadastre novos funcionários, visualize a lista de funcionários e gerencie as informações.

Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir um pull request com melhorias ou correções.
Licença

Este projeto está licenciado sob a Licença MIT.
