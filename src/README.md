English | [Русский](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/src/README.ru_RU.md)

Documentation
=======

[Laravel documentation](https://laravel.com/docs)

## Usage

### Console calculator

1. Run script

    ```shell
    docker exec calculate-workspace php artisan calculator:sum [<operand1> [<operand2>]]
    ```

    Arguments:
    
    * operand1 - The first parameter of the sum
    * operand2 - The second parameter of the sum

    Example error:

    |operand value|error|
    |:---:|:---|
    |text|The :operand must be a positive number.|
    |123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 1234|The :operand must be between 0 and 255 characters.|
    

### UnitTest

1. Run UnitTest

    ```shell
    docker exec calculate-workspace phpunit
    ```

1. View code coverage

    ```
   /src/coverage_report/index.html
   ```


## Interface error

|operand value|error|translate|
|:---:|:---|:---|
|text|Поле должно содержать положительное число.|The must be a positive number.|
|123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 1234|Поле должно быть длинной от 0 до 255 символов.|The must be between 0 and 255 characters.|


***

> Eliseev AK
