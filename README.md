# Docker-compose php with routes

It consists of the following:

* PHP
* Nginx
* MySQL
* phpMyAdmin

## Installation

* Clone this repository on your local computer
* Configure .env as needed
* Install composer
* Run `composer install`
* Run the `docker-compose up -d`.

```shell
git clone https://github.com/Pawebf1/php-docker-routes.git
cd php-docker-routes
cp sample.env .env
composer install
sudo docker-compose up -d
// visit localhost
```