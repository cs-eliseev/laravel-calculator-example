English | [Русский](https://github.com/cs-eliseev/laravel-calculator-example/blob/master/src/README.ru_RU.md)

Documentation
=======

[Laravel documentation](https://laravel.com/docs)

## Usage

### Console calculator

1. Run script

    ```shell
    php artisan calculator:sum [<operand1> [<operand2>]]
    ```

    Arguments:
    
    * operand1 - The first parameter of the sum
    * operand2 - The second parameter of the sum

    Example error:

    |Operand|En|Ru|
    |:---:|:---|:---|
    |text|The :operand must be a positive number.|Поле :operand должно содержать положительное число.|
    |123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 1234|The :operand must be between 0 and 255 characters.|Поле :operand должно быть длинной от 0 до 255 символов.|
    

### UnitTest

1. Run UnitTest

    ```shell
    phpunit
    ```

1. View code coverage

    ```
   ./coverage_report/index.html
   ```


## Error

### Validate error

|Operand|En|Ru|
|:---:|:---|:---|
|text|The must be a positive number.|Поле должно содержать положительное число.|
|123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 123456789 1234|The must be between 0 and 255 characters.|Поле должно быть длинной от 0 до 255 символов.|


***

> Eliseev AK
