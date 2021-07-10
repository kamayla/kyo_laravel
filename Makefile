start:
	docker-compose up -d
ssh:
	docker exec -it laravel-study bash
stop:
	docker-compose down
build:
	docker-compose build --no-cache
