Api-Places

 - Clone o repositório: git clone https://github.com/NathaliaO/api-places.git
 - Faça uma copia do .env.example, e renomei para .env
 - Rode o comando: docker compose up -d --build
 - Entre no container: docker compose exec app bash
 - cd html
 - Rode os comandos: php artisan key:generate, composer install e php artisan migrate
 - Use o POSTMAN para fazer as requisições.

Nesta API é possível:

Troque o {id} pelo id do registro que deseja obter detalhes, alterar;

• Criar um lugar - POST - http://localhost:8989/api/places
• Editar um lugar - PUT - http://localhost:8989/api/places/{id}/edit
• Obter um lugar específico (Detalhes) - GET - http://localhost:8989/api/places/{id}
• Listar lugares - GET - http://localhost:8989/api/places
• Filtrá-los por nome - GET - http://localhost:8989/api/places?filter={name}

JSON para ser passado no POSTMAN:

{
    "name": "",
    "slug": "",
    "city": "",
    "state": ""
}

Sugestões: 

* Nesta API seria possível integrar o com VIA CEP, que ao digitar o CEP informado já poderia preencher alguns campos.