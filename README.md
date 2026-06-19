# Agenda de Contatos em PHP

## Sobre o Projeto

Este projeto foi desenvolvido com o objetivo de praticar Programação Orientada a Objetos (POO) em PHP através da criação de uma agenda de contatos simples, e a prática CRUD.

A aplicação permite cadastrar contatos, listar todos os registros, buscar contatos por ID, atualizar informações existentes e remover contatos da agenda.

O foco principal do projeto foi compreender conceitos fundamentais de orientação a objetos, como encapsulamento, criação de classes, utilização de construtores, atributos privados e métodos getters e setters.

## Funcionalidades

* Adicionar novos contatos
* Listar todos os contatos cadastrados
* Buscar contato pelo ID
* Atualizar informações de um contato
* Remover contato da agenda

## Estrutura do Projeto

### Classe Contact

Responsável por representar um contato da agenda.

Cada contato possui:

* Identificação númerica
* Nome
* E-mail
* Telefone

A classe utiliza atributos privados para proteger os dados e disponibiliza métodos getters e setters para acesso e modificação das informações.

### Classe Agenda

Responsável pelo gerenciamento dos contatos.

Principais responsabilidades:

* Armazenar os contatos em um array
* Adicionar novos contatos
* Retornar todos os contatos cadastrados
* Buscar contatos por ID
* Atualizar dados de um contato existente
* Remover contatos da agenda

