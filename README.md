# Step to setup in your local PC

1. git clone link of this project or donwload this as zip and extract into /var/www/html/ location
2. composer update
3. update DB configration in .env file if .evn file not found then rename .env.example as .env
4. php artisan migrate
5. php artisan serve