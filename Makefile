check-code: lint static-analyze

lint:
	vendor/bin/phpcs --standard=PSR12 src tests

lint-fix:
	vendor/bin/phpcbf --standard=PSR12 src tests

static-analyze:
	vendor/bin/phpstan analyse -l 9  -- src tests

install:
	composer install -o