# Small - Medic
Repositório teste de uma agenda simples para consultório em geral feito e Laravel e Mysql<br><br>

# Instalando o Small - Medic 
Clonar o projeto pra seu pc, ou baixar ele e descompactar em uma pasta chamada smallmedic.<br>
Criar o banco de dados em MYSQL com o nome de smallmedic.<br>
Configurar o arquivo .env com os dados de usuario e banco criado no seu gerenciador do banco de dados.<br
Obs: Eu deixei como root mesmo assim fica mas facil de testar.
<hr>
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
## Executar o projeto:
Em seu navegador preferido e execute essa url http://127.0.0.1:8000

```
php artisan serve
```
## Fazer login: 
Usuário: <b>teste@teste.com.br</b> -Senha: <b>123456</b> 

<hr>
## Apos logar:

Va ate a pagina: Gestão de Medicos -> Usuario e cadastre um medico exemplo;
Em usuario va e novo usuario "Botão verde bem em cima da pagina", Informe o nome, o e-mail e a senha, logo em baixo nas funções, informe a função Medico, depois clique em salvar;
<br><br>
## Apos logar com os dados do medico:
Va ate a pagina Paciente e cadastre um paciente com todos os dados ali solicitados.<br>
Apos cadastar o pacimente va a pagina Atendimento e cadastre um atendimento, selecionando todos os campos solicitados e tambem definindo as datas certa.<br>
Depois de cadastrado o atendimento, você pode visualizar todos os atendimentos no calendario.

## Observações Gerais:

Cada medico visualiza sua propria carteira de paciente, e de agendamento.<hr>

## Pronto agora você ja poda sair agendando todos seus pacientes.

<hr>

## Atualizações Futuras:
1- Criar relatorios detalhados com tempo de consulta, historicos, receitas e outros.<br>
2- Criar um fluxo de caixa.<br>
3- Criar uma API ou um simples botão para disparo de aviso ao cliente "De preferencia WhatsApp".<br>

