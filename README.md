# Разворачивание проекта

## Находясь в папке с загруженным проектом

```sh
composer install

cp .env.example .env
nano .env
```
Заполнить переменные окружения

```sh
sudo chown -R $USER:www-data .
sudo find . -type f -exec chmod 664 {} \;
sudo find . -type d -exec chmod 775 {} \;
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache

php artisan migrate --seed

npm install
npm run build
```
