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

### UnitTest report path

```
/src/coverage_report
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

UnitTest service `CalculatorService`

1. Run UnitTest

    ```shell
    docker exec calculate-workspace phpunit
    ```

1. View code coverage

    ```
   /src/coverage_report/index.html
   ```

## Documentation

[Project documentation](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/src/README.md)

***

> Eliseev AK