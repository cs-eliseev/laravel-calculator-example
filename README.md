English | [Русский](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/README.ru_RU.md)

Example calculator for Laravel
=======

## Description

Uses stack: Nginx, PHP 7.4, Redis.


## Info

### Project link

* Laravel application HTTP: http://localhost:6002

### Laravel project path

```
/src
```

### Logs path

```
/logs
```


## Usage

### Install developments tools

* Install [docker](https://docs.docker.com/engine/installation/)
* Install [docker-compose](https://docs.docker.com/compose/install/)

### Build application

1. Import dependency

    ```shell
    git clone https://github.com/laradock/laradock.git docker
    ```

1. Build Docker containers

    ```shell
    docker-compose up -d --build
    ```

1. Build dependency

    ```shell
    docker exec -it calculate-workspace npm i --no-bin-links && npm run dev && composer update
    ```
 
### Use UnitTest

UNIT test service `CalculatorService`

1. To run the PHPUnit unit tests

    ```shell
    docker exec calculate-workspace ./vendor/bin/phpunit
    ```

***

> Eliseev AK