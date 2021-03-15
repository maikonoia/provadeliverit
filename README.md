## Prova DeliverIT

Para o desenvolvimento da aplicação do enunciado proposto, utilizei o Framework Laravel 8.32 por proporcionar um desenvolvimento mais fluido e prático.

## Requisitos

- Docker

## Instalação

Crie um novo diretório para o projeto. Ex: DeliverIT
```sh
mkdir DeliverIT
```

Entre no diretório:
```sh
cd DeliverIT
```

Clone o projeto:
```sh
git clone https://github.com/maikonoia/provadeliverit.git
```

Entre no diretório do projeto clonado:
```sh
cd provadeliverit
```

Execute os seguintes comandos:

```sh
docker-compose build app
docker-compose up -d
docker-compose exec app composer deploy-docker
```

## Executar Testes Unitários

Para execução dos testes unitários, basta executar o PHPUnit conforme abaixo:
```sh
./vendor/bin/phpunit
```

## Executar a aplicação

O projetos estará acessivel na url:
[http://localhost:8080](http://localhost:8080)

Para adicionar um novo participante:
[http://localhost:8000/api/participants](http://localhost:8000/api/participants)

Metodo POST

```javascript
{
    "name":"Flávio Pacheco",
    "birth": "1993-02-13",
    "cpf":"123.456.789-00"
}
```

Para adicionar uma nova corrida:
[http://localhost:8000/api/racings](http://localhost:8000/api/racings)

Metodo POST

```javascript
{
    "distance":2,
    "date": "2021-04-23"
}
```

Para adicionar um participante a uma corrida:
[http://localhost:8000/api/race-participants](http://localhost:8000/api/race-participants)

Metodo POST

```javascript
{
    "participant": 1,
    "racing": 1,
    "start" : "07:30:00",
    "finish" : "09:00:00"
}
```

Para exibir a lista de resultados:
Metodo GET

[ http://localhost:8000/api/results](http://localhost:8000/api/results)

Para exibir a lista de resultados por idade:
Metodo GET

[ http://localhost:8000/api/results?age=1](http://localhost:8000/api/results?age=1)