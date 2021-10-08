# Instalação:

Requer:

- Docker version 20.10.8, build 3967b7d
- docker-compose version 1.29.2, build 5becea4c

Comandos

- docker-compose up -d
- docker exec -it web bash
- em ./app:
    - composer install
    - npm install && npm run dev


Esse sistema não requer banco de dados....
Esse sistem us PHP 7.4, composer 2x, laravel 8 e livewire 2


by: Álesson de Jesus


Observações ao consumir API da Buzzvel:

- Api sem paginacao dificulta e torna inviavel o sistema de paginação no front-end
- Query strings que customizam o resultados como: &order=&from&to&limit devem ser lidas e tratadas na api
- Para melhorar a API sugiro um edpoint que receba o local_id, latitude, longitude e forneça a distancia e adicionar chaves nos campos:
  `  
  ["1555 Malabia House Hotel","-34.591035804444125","-58.42752456665039","67.25"],`  deveria ser


["name": "1555 Malabia House Hotel", "description": null,  "latitude": "-34.591035804444125", "longitude":: "-58.42752456665039", "price": "67.25"],
