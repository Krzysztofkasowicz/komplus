How to run:
```composer install
npm install
rename file .env.example to .env
php artisan key:generate
in .env file use 'root' as database username and 'root' as password
php artisan config:cache
php artisan serve and open address http://127.0.0.1:8000 in browser :)

