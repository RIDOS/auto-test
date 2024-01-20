console:
	@php-console

test:
	clear && vendor/bin/phpunit tests --exclude-group=Deprecated

psr-check:
	vendor/bin/phpcs ./src/SalaryCalculator
