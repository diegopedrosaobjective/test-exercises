test:
	./vendor/bin/phpunit tests/

validate-stan:
	./vendor/bin/phpstan analyse --level=max src tests

validate-phpcs:
	./vendor/bin/php-cs-fixer fix src -v --dry-run