test:
	./vendor/bin/phpunit tests/

phpstan-check:
	./vendor/bin/phpstan analyse --level=max app tests

phpcs-check:
	./vendor/bin/php-cs-fixer fix app -v --dry-run