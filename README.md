# Laravel Boolfolio - Base

Creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti.

## Todo 15/06

Iniziamo un nuovo progetto usando laravel breeze ed il pacchetto Laravel 9 Preset con autenticazione.

Breeze
```
composer require laravel/breeze --dev

php artisan breeze:install
```

Preset Laravel + Scss + Bootstrap
```
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap --auth
```
Separamo gli ambienti Guest da quelli Admin per quanto riguarda stili, js, controller, viste e layout.


## Install

Download zip or clone repository (if you clone it remember to delete the git file from the folder before start)

- install all dependencies

```
npm i 

composer i 

```

- Duplicate the file  ".env.example" and rename it to ".env", then compile it with your db datas and generate key

```
php artisan key:generate
```

- Create a symbolic link to receve uploaded images

```
php artisan storage:link
```
