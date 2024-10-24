en la carpeta hay 3 proyectos 
antes de todo debene ejecutar composer install para el proyecto de laravel y npm install para el proecto de react
1 docker configurado para que arranque el laravel solo debes hubicarte a nivel del dokcer compose.yml y tipear en la consola sudo docker compose up -d
para que este proyecto funcione correctamente debes configurar en tus host virtuales en windows o en linux el dominio location.test para que responda la pi directamente desde ese domino
2 proecto react solo se debe hacer nmp install y despues inicar el pryecto normalmente
en el proyecto estra un json de postman para que se haga la verificacion de los datos 


en el proyecto de laravel debes ejecutar las migraciones tan pronto se levante el docker
para hacer esto se debe entrar a la maquina de dokcer de esta manera 
sudo docker compose exec service_location_php_fpm bash y dentro del contenedor docker ocmpose down && php artisan migrate
