1. Download the project ZIP folder.

2. Extract it into the WAMP www directory:

3.Open CMD or Visual Studio Code Terminal.

select project - cd C:\wamp64\www\leadmanage

4. Create Database in phpMyAdmin

Open: http://localhost/phpmyadmin/


CREATE DATABASE -> leadmanage 

run command
5.Configure .env file on project

 DB_DATABASE=leadmanage
DB_USERNAME=root
DB_PASSWORD=

6. Run migrations
php artisan migrate

7. Run seeder
php artisan db:seed --class=AdminSeeder


9. run Server
php artisan serve

