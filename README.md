Foi configurado apenas o lumen.
E para rodar a aplicação, uma opção seria usar o server do próprio PHP:

$ php -S 127.0.0.1:8000 -t public


Após executar esse comando, a aplicação irá rodar na url = http://127.0.0.1:8000



Agora precisamos rodar as migrations:
Foi utilizado o SQlite para essa base de dados.

$ php artisan migrate


Ele irá executar as duas migrations:
2023_03_16_185213_create_products_table
2023_03_16_204817_create_requests_table

Referentes as tabelas Produtos (products) e Pedidos (requests)


Depois que as tabelas são criados, podemos executar o seeder para popular a base de dados com alguns produtos e pedidos.

Esse comando irá executar dois seeder para popular com 50 produtos e 40 pedidos:

$ php artisan db:seed

Depois que popular a base de dados, podemos acessar os dois endpoints:
Por exemplo:

http://127.0.0.1:8000/products
http://127.0.0.1:8000/requests


Então vamos conseguir listar os produtos em formato JSON, e listar os pedidos em formato JSON também.



