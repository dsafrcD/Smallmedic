# Smallmedic
Repositório teste de uma agenda simples para consultório em geral feito e Laravel e Mysql

# Instalando o Small - Medic 
Clonar o projeto pra seu pc, ou baixar ele e descompactar em uma pasta chamada smallmedic;
Criar o banco de dados em MYSQL com o nome de smallmedic;
Configurar o arquivo .env com os dados de usuario e banco criado no seu gerenciador do banco de dados;
Obs: Eu deixei como root mesmo assim fica mas facil de testar;
<hr>;
Na pasta smallmedic, executar em sequência: 

``` 
composer install
composer update - so pra garantir que vai estar tudo atualizado
php artisan migrate --seed 
php artisan key:generate
php artisan storage:link

```
Após terminar de baixar tudo e atualizar via composer, executar o comnando;
```
php artisan serve
```
<br>

## Executar o projeto:

Em seu navegador preferido e execute essa url http://127.0.0.1:8000

```
php artisan serve
```
## Fazer login: 
- Usuário: teste@teste.com.br
- Senha: 123456 

<hr>
## Apos tudo rodar ira aparecer essa tela.
![ScreenShot](https://github.com/dsafrcD/Smallmedic/blob/main/Prints/login.JPG)
