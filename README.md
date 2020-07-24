English | [Русский](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/README.ru_RU.md)

Example calculator for Laravel
=======

## Description

Uses stack: Nginx, PHP 7.4, Redis.


## Info

### Ports

* Laravel application: http://localhost:6002

|Service|Port|
|:---|:---:|
|http|6002|
|redis|6007|
|xdebug|9000|

### Docker containers

|Service|Container name|
|:---|:---:|
|nginx|calculate-nginx|
|php-fpm|calculate-php-fpm|
|redis|calculate-redis|
|aplication|calculate-workspace|

### Laravel project path

```
./src
```

### Logs path

```
./logs
```

### UnitTest report path

```
./src/coverage_report
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
    docker exec calculate-workspace bash -c 'npm i --no-bin-links && npm run dev && composer update'
    ```
 
### Use UnitTest

UnitTest service `CalculatorService`

1. Go to container

    ```shell
    docker exec -it calculate-workspace bash
    ```

1. Run UnitTest

    ```shell
    phpunit
    ```

1. View code coverage

    ```
   ./src/coverage_report/index.html
   ```

### Use console calculator

1. Run script

    ```shell
    docker exec calculate-workspace php artisan calculator:sum [<operand1> [<operand2>]]
    ```


## Documentation

[User documentation](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/src/README.md)

***

> Eliseev AK