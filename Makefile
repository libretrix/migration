DOCKER_COMPOSE_COMMAND=docker compose
PHP_BACKEND=$(DOCKER_COMPOSE_COMMAND) exec -u 1000 php-backend
PHP_EXEC=$(PHP_BACKEND) php -d memory_limit=1G -dxdebug.mode=off
PHP_EXEC_DEBUG=$(PHP_BACKEND) php -d memory_limit=1G


build:
	@$(DOCKER_COMPOSE_COMMAND) build

up:
	@$(DOCKER_COMPOSE_COMMAND) up -d --remove-orphans

down:
	@$(DOCKER_COMPOSE_COMMAND) down --remove-orphans

shell:
	@$(DOCKER_COMPOSE_COMMAND) exec -u 1000 -it php-backend sh

analyze-code:
	@$(DOCKER_COMPOSE_COMMAND) $(PHP_EXEC) bin/phpstan analyse --memory-limit 1G

fix-style:
	@$(DOCKER_COMPOSE_COMMAND) $(PHP_EXEC) bin/php-cs-fixer --show-progress=dots -v fix

restart:
	make down
	make up

composer-dump-autoload:
	@$(PHP_BACKEND) composer dump-autoload --classmap-authoritative

composer-install:
	@$(PHP_BACKEND) composer install --optimize-autoloader --apcu-autoloader

composer-update:
	@$(PHP_BACKEND) composer update --optimize-autoloader --apcu-autoloader