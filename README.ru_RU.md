[English](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/README.md) | Русский

Пример калькулятора на laravel
=======

## Описание

Используемый стек: Nginx, PHP 7.4, Redis.


## Информация

### Ссылки

* Laravel application HTTP: http://localhost:6002

### Путь к проекту

```
/src
```

### Путь к логам

```
/logs
```

### Путь к отчету к UnitTest

```
/src/coverage_report
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
    docker exec -it calculate-workspace npm i --no-bin-links && npm run dev && composer update
    ```
 
### Использование UnitTest

UnitTest для сервиса `CalculatorService`

1. Запуск UnitTest

    ```shell
    docker exec calculate-workspace phpunit
    ```

1. Просмотр покрытия тестоми

    ```
   /src/coverage_report/index.html
   ```

## Документация

[Документация по проекту](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/src/README.ru_RU.md)
 
***

> Елисеев АК