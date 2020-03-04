## zShort service 

* Symfony skeleton 4.x LTS that is recommended for more barebones applications like microservices and APIs.
* using the default directory structure of a Symfony 4 project

 ### docker-compose-symfony
 A pretty simplified docker-compose workflow that sets up a LEMP (Linux, Nginx, MySQL, PHP) network of containers for symfony 4.4.x
 
### Database setup 
```
#edit database details 
DATABASE_URL=mysql://zshortuser:password@mysql:3306/zshort
```
 

## Usage
``` 
docker-compose up -d --build

docker-compose run --rm composer install

docker-compose run --rm composer require symfony/security-bundle 

docker-compose run --rm app bin/console make:user

docker-compose run --rm app bin/console doctrine:database:create 

docker-compose run --rm app bin/console make:migration

docker-compose run --rm app bin/console doctrine:migrations:migrate

docker-compose run --rm app bin/console make:auth
```
 


**Note** 
 
Containers created and their ports (if used) are as follows:

- **nginx 1.17** - `:8080`
- **mysql 8.0** - `:3306`
- **php 7.4** - `:9000`
- **composer**
- **phpmyadmin** 8082 if needed to modify or check database
Network created
- zshort:
