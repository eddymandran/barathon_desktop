<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About the project

End-of-study project carried out as part of the passage of the title "Designer Developer of application"

## Prerequisite
You can launch the project in 2 different ways:
- option 1: docker
<div align="center">

[<img src="https://www.docker.com/wp-content/uploads/2022/03/horizontal-logo-monochromatic-white.png" alt="docker logo" height="80">](https://www.docker.com/)

</div>

- option 2: install everything locally

<div align="center">

[<img src="https://www.php.net/images/logos/new-php-logo.svg" alt="php logo" height="80">](https://www.php.net/downloads.php#v8.0.17) |   [<img src="https://getcomposer.org/img/logo-composer-transparent3.png" alt="composer logo" height="80">](https://getcomposer.org/)   |   [<img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg" alt="nodejs logo" height="80">](https://nodejs.org)

</div>

## Installation & configuration
- option 1 : docker

Before creating the docker image, you must first copy the .env.example file by renaming it to .env and complete the following fields:

- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

These lines are also used to create the docker image

```bash
cp .env.example .env
```
If you chose to use mysql, you must uncomment lines 23-37 and comment lines 39-52 in the docker-compose.yml file

Now run this commands in your terminal to build docker image:
```bash
docker compose build
```

After docker is done building the image, you can launch the container with the following command:
```bash
docker compose up -d
```
In order to interact with the laravel application, you need to access the container via the following command which will open a bash terminal for you:
```bash
docker compose exec -it app bash
```

```bash
composer install
npm install
php artisan key:generate
```

Then perform migrations and generate the dataset
```bash
php artisan migrate

php artisan db:seed
```
Now you can exit from the container by typing ***exit***

The application is accessible at the following address:

http://localhost:8080/

To access the database via phpmyadmin, use the following address:

http://localhost:8085/

You just have to fill in the user, the password entered in the .env file and leave the server field empty

If you want to modify a page on the front part, you must use this command for the modifications to be taken into account

```bash
docker compose exec -it app bash
npm run watch-poll
```
<br/>

- option 2 : locally

```bash
composer install
npm install 
cp .env.example .env
php artisan key:generate
```
Create a database locally then complete the .env file

- DB_HOST
- DB_PORT
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

Then perform migrations

```bash
php artisan migrate
```
Generate the dataset
```bash
php artisan db:seed
```

To use, in 2 different terminals, you must type :
```bash
php artisan serve
```
```bash
npm run watch
```

## License

The project is open-sourced software licensed under the [GNU GPLv3](https://www.gnu.org/licenses/gpl-3.0.html).

## Authors
<div align="center">

Eddy MANDRAN [@eddymandran](https://github.com/eddymandran)  | Julien PELLATTIERO [@Pella0](https://github.com/Pella0)   | Simon MAINFROY [@SimonMfroy](https://github.com/SimonMfroy)

</div>
