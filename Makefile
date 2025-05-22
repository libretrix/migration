PHP_EXEC=exec -u www php-backend php -d memory_limit=1G -dxdebug.mode=off
PHP_EXEC_DEBUG=exec -u www php-backend php -d memory_limit=1G

DOCKER_COMPOSE_COMMAND=docker compose

build:
	@$(DOCKER_COMPOSE_COMMAND) build

up:
	@$(DOCKER_COMPOSE_COMMAND) up -d --remove-orphans

down:
	@$(DOCKER_COMPOSE_COMMAND) down --remove-orphans

shell:
	@$(DOCKER_COMPOSE_COMMAND) exec -u www -it php-backend bash

analyze-code:
	@$(DOCKER_COMPOSE_COMMAND) $(PHP_EXEC) bin/phpstan analyse --memory-limit 1G

fix-style:
	@$(DOCKER_COMPOSE_COMMAND) $(PHP_EXEC) bin/php-cs-fixer --show-progress=dots -v fix

restart:
	make down
	make up