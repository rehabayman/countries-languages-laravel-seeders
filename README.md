Countries and Languages Laravel Seeders
=======================================

#### This repo provides laravel migrations, seeders, models and JSON data for Country (with phone codes) and Languages names in both English and Arabic with their codes

### About

1. 'name' field in both models are of json data type to hold the english and arabic translations.
2. These models are ready to use spatie/laravel-translatable package if you would like to implement multilingualism in your app. Just implement the steps mentioned in their documentation.
3. Some countries doesn't have a corresponding phone code.

### Requirements

1. MySQL >= 5.7.8.
2. Laravel framework.

### Usage

1. Add the json directory to the public directory.
2. Add the migration files' code to your migration files.
3. Run the migrations.

    ```
        php artisan migrate
    ```
4. Add the seeders to your seeders directory.
5. Run the seeders.

    ```
        php artisan db:seed --class=CountrySeeder
        php artisan db:seed --class=LanguageSeeder
    ```