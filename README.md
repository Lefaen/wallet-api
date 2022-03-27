# Docker-image

### Сервисы

* **nginx**
  Для конфигурации - папка hosts
  port: 80
* **php** 8.1
  + composer
  + cron
* **postgres**
  user: root
  password: root
  port: 5432
* **adminer**
  port: 8080


* hosts - срдержит конфиги сайта на nginx
* www - директория для размещения проектов
* logs - логи нджинкс
* php - докерфайл образа php
* sql_data - данные бд

### Развертывание
Поднять образ
```shell
docker-compose up
```

Запустить миграции базы данных внутри контейнера php
```shell
php /var/www/commands/cli.php migrate
```