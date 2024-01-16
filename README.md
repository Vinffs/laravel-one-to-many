<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# LARAVEL AUTH

creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti. <br>

Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere. <br>

Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando SASS. <br>

## Descrizione:
- Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto usando laravel breeze ed il pacchetto con autenticazione (utilizzate il template su github).
- Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:
- Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office <br>
- Creazione del modello `Project` con relativa migrazione, seeder, controller, validazioni e rotte <br>
- Per la parte di back-office creiamo un resource controller `Admin\ProjectController` per gestire tutte le operazioni CRUD dei progetti <br>
- Implementare la visualizzazione dei dati nella index dei progetti con una tabella (con bottoni per show, edit, e delete) <br>

## Bonus
Iniziare ad implementare un template (con relativi partials) per una dashboard di amministrazione

15/01

Continuiamo a lavorare nella repo dei giorni scorsi e aggiungiamo un’immagine ai nostri progetti con il fileupload. <br>
Ricordiamoci di creare il symlink con l’apposito comando artisan e di aggiungere l’attributo enctype="multipart/form-data" ai form di creazione e di modifica!
