<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About the project

End-of-study project carried out as part of the passage of the title "Designer Developer of application"

## Prerequisite
You need docker to run the project
<div align="center">

[<img src="https://www.docker.com/wp-content/uploads/2022/03/horizontal-logo-monochromatic-white.png" alt="docker logo" height="80">](https://www.docker.com/)

</div>



## Installation & configuration

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
Once inside the container, you must type the following commands to install all dependencies and generate the key
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

http://localhost:8000/

If you want to modify a page on the frontend part you must use this command for the modifications to take effect

```bash
docker compose exec -it app bash
npm run watch-poll
```
<br/>


## License

The project is open-sourced software licensed under the [GNU GPLv3](https://www.gnu.org/licenses/gpl-3.0.html).

## Authors
<div align="center">

Eddy MANDRAN [@eddymandran](https://github.com/eddymandran)  | Julien PELLATTIERO [@Pella0](https://github.com/Pella0)   | Simon MAINFROY [@SimonMfroy](https://github.com/SimonMfroy)

</div>
