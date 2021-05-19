<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About 

Ceci est un dépot pour le tutoriel sur la façon de configurer un mode de paiement en ligne sur Laravel à l'aide de la solution PayDunya. (This is a repo for the tutorial on how to setup an online payment method on Laravel using the PayDunya Solution.)


##Set up - installation

- git clone https://gitlab.com/webamadou/paydunya_in_laravel.git
- cd paydunya_in_laravel
- composer update
- cp .env.example .env
- php artisan key:gen
- Créez une base de données et spécifiez ses accès dans le fichier .env (Create a database and specify its accesses in the .env file)
- php artisan migrate
- php artisan db:seed
- php artisan serve ( enjoy :) )

