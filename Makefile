console:
	@php-console

test:
	clear && vendor/bin/phpunit tests

psr-check:
	vendor/bin/phpcs ./src/SalaryCalculator
