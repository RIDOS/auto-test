# Тестирование через PHPUnit

В данном проекте илюстрируется работа тестирования. В качестве примера используется файл `src/SalaryCalculator.php`, который вычисляет заработную плату сотруников.

Так же, сюда будут попадать тест с кодом из **LeetCode**.

## Get Started
Установите зависимости командой:
```bash
composer update
```

Запустите тесты командой:
```bash
make test
```

После чего появиться результат тестирования. Пример:
```bash
vendor/bin/phpunit --colors=always tests
PHPUnit 10.5.7 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.1.12-1ubuntu4.3

.                                                                   1 / 1 (100%)

Time: 00:00.002, Memory: 8.00 MB

OK (1 test, 1 assertion)
```
