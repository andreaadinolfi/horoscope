cp .env.example .env
composer install
php artisan key:generate
php artisan config:cache   
php artisan optimize:clear
docker-compose up -d
./vendor/bin/sail artisan migrate:fresh --seed
