<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <!-- oggi create un nuovo progetto Laravel 7 e tramite gli appositi comandi 
        artisan create un model con relativa migration e un resource controller.
        Iniziate a definire le operazioni CRUD per gestire un archivio di fumetti.
        Bonus:
        creare il seeder per la tabella comics utilizzando il file in allegato. -->
            <p>Pagina di prova</p>
         <!-- Iniziare un progetto da zero
        [  ] Creare un progetto nuovo: composer create-project --prefer-dist laravel/laravel:^7.0 ...nomeDelProgetto...
        [  ] Attivare il server da terminale:  php artisan serve
        [  ] Installare le dipendenze npm: npm install
        [  ] Attivare Laravel-mix in background: npm run watch
        [  ] Controlliamo il file per usare bene laravel-mix: webpack.mix.js
        [  ] Creare la prima rout per la Home page e gli assegniamo un 'name'
        [  ] Creiamo un layout da estendere
        [  ] Inseriamo i primi partials e "chiocciolayield"
        [  ] inseriamo il link per i css compilati con laravel-mix e controlliamo che il nostro stile funzioni
        [  ] Creo una seconda rout e la nuova view di riferimento
        [  ] Creo o importo un fake database per il progetto nella cartella config
        [  ] Aggiorno la rout per utilizzare il fake database
        [  ] Creazione di migration,seeder,controlles e view con:
        [  ] php artisan make:model Nome -mc (questo crea la migration e il controller automaticamente)
        [  ] Oppure php artisan make:controller Nome
        [  ] Oppure php artisan make:migrate Nome
        [  ] Cambiare nome database,username e password nel file .env 
        [  ] Creare database in phpmyadmin oppure importare una tabella già esistente 
        [  ] Nel file migration si inseriscono i vari elementi per creare la tabella nel database 
        [  ] Lanciare php artisan:migrate --seed , e in caso di modifica,refreshare la migration con php artisan migrate:refresh
        [  ] Lanciare php artisan make:seeder Nomeseeder
        [  ] Creare i seed da immettere nella tabella,e chiudere con $nomeistanza->save(); -->
    </body>
</html>
