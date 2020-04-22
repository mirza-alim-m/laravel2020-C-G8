Langkah instalasi :

git clone "https://github.com/mirza-alim-m/laravel2020-D-G4.git"
cd laravel2020-D-G4
composer update
copy file .env-example lalu paste dengan nama .env
php artisan key:generate
buatlah database baru
buka file .env edit : -DB_DATABASE= 'sesuai nama database' -DB_USERNAME= 'sesuai username database kalian' -DB_PASSWORD= 'sesuai password database kalian'
php artisan migrate --seed
php artisan serve
buka localhost:8080 pada web browser
