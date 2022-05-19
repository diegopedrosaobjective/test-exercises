test:
	./vendor/bin/phpunit tests/

phpstan-check:
	./vendor/bin/phpstan analyse --level=max src tests

phpcs-check:
	./vendor/bin/php-cs-fixer fix src -v --dry-run