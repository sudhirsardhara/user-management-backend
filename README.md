composer create-project --prefer-dist laravel/laravel user-management-backend
cd user-management-backend
composer require laravel/sail --dev
php artisan sail:install
./vendor/bin/sail up -d

php artisan make:model User -m

php artisan migrate
php artisan make:controller UserController

