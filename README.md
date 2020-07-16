Langkah instalasi :

  1. git clone "https://github.com/mirza-alim-m/laravel2020-D-G4.git"
  2. cd laravel2020-D-G4
  3. composer update
  4. copy file .env-example lalu paste dengan nama .env
  5. php artisan key:generate
  6. buatlah database baru
  7. buka file .env edit : -DB_DATABASE= 'sesuai nama database' -DB_USERNAME= 'sesuai username database kalian' -DB_PASSWORD= 'sesuai password database kalian'
  8. php artisan migrate --seed 
  9. php artisan serve
  10. buka localhost:8080 pada web browser
