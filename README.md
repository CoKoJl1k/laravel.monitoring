# последовательность комманд 
# start
docker-compose build app
docker-compose up -d
docker-compose exec app-monitoring composer install
docker-compose exec app-monitoring php artisan key:generate
docker-compose exec app-monitoring php artisan migrate

# end

# docker-compose exec app composer install --no-scripts
# docker-compose exec app composer dump-autoload

# docker-compose exec app php artisan key:generate
# docker-compose exec app php artisan migrate

/*rebuild containers*/
docker-compose up -d --build --force-recreate
/*remove all*/
docker-compose down --volumes --rmi all
docker system prune -a --volumes -f

#breeze
composer require laravel/breeze --dev
php artisan breeze:install
npm install 
npm run dev
