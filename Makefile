console:
	@php-console

test:
	vendor/bin/phpunit --colors=always tests

psr-check:
	vendor/bin/phpcs ./src/SalaryCalculator
