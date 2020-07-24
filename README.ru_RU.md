[English](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/README.md) | Русский

Пример калькулятора на laravel
=======

## Описание

Используемый стек: Nginx, PHP 7.4, Redis.


## Информация

### Порты

* Приложение Laravel доступно: http://localhost:6002

|Сервис|Порт|
|:---|:---:|
|http|6002|
|https|6003|
|redis|6007|
|xdebug|9000|

### Docker контейнеры

|Сервис|Имя контейнера|
|:---|:---:|
|nginx|calculate-nginx|
|php-fpm|calculate-php-fpm|
|redis|calculate-redis|
|aplication|calculate-workspace|

### Путь к проекту

```
./src
```

### Путь к логам

```
./logs
```

### Путь к отчету к UnitTest

```
./src/coverage_report
```


## Использование

### Установка окружения для разработчиков

* Install [docker](https://docs.docker.com/engine/installation/)
* Install [docker-compose](https://docs.docker.com/compose/install/)

### Сборка проекта

1. Импорт зависимостей

    ```shell
    git clone https://github.com/laradock/laradock.git docker
    ```

1. Сборка Docker контейнеров

    ```shell
    docker-compose up -d --build
    ```

1. Сборка зависимостей

    ```shell
    docker exec calculate-workspace bash -c 'npm i --no-bin-links && npm run dev && composer update'
    ```
 
### Использование UnitTest

UnitTest для сервиса `CalculatorService`

1. Перейти в контейнер

    ```shell
    docker exec -it calculate-workspace bash
    ```

1. Запустить UnitTest

    ```shell
    phpunit
    ```

1. Просмотр покрытия тестоми

    ```
   ./src/coverage_report/index.html
   ```

### Использование консольного калькулятора

1. Запуск скрипта

    ```shell
    docker exec calculate-workspace php artisan calculator:sum [<operand1> [<operand2>]]
    ```


## Документация

[Пользовательская документация](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/src/README.ru_RU.md)
 
***

> Елисеев АК