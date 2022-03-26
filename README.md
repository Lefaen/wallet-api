# Docker-image

### Сервисы

* **nginx**
  Для конфигурации - папка hosts
  port: 80
* **php** 8.0.11
  содержит composer
* **postgres**
  user: root
  password: root
  port: 5432
* **adminer**
  port: 8080

### hosts

Редактировать файл host На основной машине - для маршрутизации по именам

### Пути

Пути основной машины необходимо настраивать в соответствии с ОС.

Для windows обратные слеши между директориями

* .\example\example.txt
* C:\example\example.txt

### Директории

* hosts - срдержит конфиги сайта на nginx
* www - директория для размещения проектов
* logs - логи нджинкс
* php - докерфайл образа php
* sql_data - данные бд
