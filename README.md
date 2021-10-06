# aquastore
Developer Challenge - AquaStore

### Prerequisites
PHP >= 7.4.16
with the following extensions enabled:
```
extension=curl
extension=fileinfo
extension=gd2
extension=gettext
extension=mbstring
extension=exif      ; Must be after mbstring as it depends on it
extension=openssl
extension=pdo_mysql
```

MySQL >= 8.0.26

### Laravel .env file
Copy ```.env.dev``` to ```.env```

### Create & Seed Database
```
mysql> CREATE SCHEMA `aquastore` DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci ;
C:\> php artisan migrate
C:\> php artisan db:seed
```

### To access API through PHPStorm HTTPRequest scratch file
```
POST http://localhost:8000/api/fish
Content-Type: application/x-www-form-urlencoded

species=shark&color=grey&number_of_fins=3&aquarium_id=1

###

PUT http://localhost:8000/api/fish/3
Content-Type: application/x-www-form-urlencoded

species=whiteshark&color=black&number_of_fins=4&aquarium_id=2

###

GET http://localhost:8000/api/aquarium-get-all-fish/1
Accept: application/json

```

