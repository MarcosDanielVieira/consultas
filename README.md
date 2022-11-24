# consultas

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

Desenvolver um sistema de marcação de consultas. Devemos ter o cadastro das especialidades, dos médicos e dos pacientes. Após, precisamos criar uma consulta associando o paciente ao médico.

<p align="center">
   <img src="https://github.com/MarcosDanielVieira/consultas/blob/main/public/img/agenda.svg" width="400"> AngendEasy
</p>

# Rodar projeto

-   composer update
-   php artisan serve

# Para definir sua configuração global de nome de usuário/e-mail:

Abra a linha de comando.

-   Defina seu nome de usuário: git config --global user.name "FIRST_NAME LAST_NAME"
-   Defina seu endereço de e-mail: git config --global user.email "MY_NAME@example.com"

# Criação de model automático

-   Controller e Migration
    -   php artisan make:model Login -mc <!-- (comando que cria migrate, model e controller ) -->
    -   php artisan migrate <!-- (comando que roda as migrate no banco ) -->
    -   php artisan migrate:rollback <!-- (comando que remove as migrate do banco ) -->
    -   php artisan migrate:rollback --step=5 <!-- (comando que remove as 5 últimas migrate do banco ) -->
    -   php artisan storage:link <!-- (comando para criar link simbólico para fazer upload -->

# Criando dados fictícios

    -   php artisan make:factory UserFactory --model=User <!-- (comando para criação de dados fictícios) -->
    -   php artisan make:seed DatabaseSeeder <!-- (comando para criar semente) -->
    -   php artisan db:seed --class=DatabaseSeeder <!-- (comando para executar um semeador dos dados)-->
