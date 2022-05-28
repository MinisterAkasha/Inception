all:
	docker-compose -f srcs/docker-compose.yml build
	docker-compose -f srcs/docker-compose.yml up -d
stop:
	docker-compose -f srcs/docker-compose.yml down
with_logs:
	docker-compose -f ./srcs/docker-compose.yml up --build

.PHONY:	all up stop down start re
