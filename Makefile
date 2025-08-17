install:
	composer install
	
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

test:
	composer exec --verbose phpunit tests

tests-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-text

tests-coverage-log:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml

self-test:
	echo WORKS