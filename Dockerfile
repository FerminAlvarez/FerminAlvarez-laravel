FROM richarvey/nginx-php-fpm:1.7.2

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_DEBUG = "true"
ENV APP_ENV = "production"
ENV APP_KEY = "base64:FSGuDX4RBHgj+ROXLN/dCjx7+TUlhFLdzhQmFfGAM1w="
ENV APP_NAME = "Precios Libros"
ENV CLOUDINARY_URL = "cloudinary://379931979826364:5A_6Q5iCjxy3Kyg9yHcYq7A2eZU@dzpdru0vq"
ENV DB_CONNECTION = "pgsql"
ENV MAIL_ENCRYPTION = "ssl"
ENV MAIL_FROM_ADDRESS = "mejoresprecioslibros@gmail.com"
ENV MAIL_FROM_NAME = "Precios de libros"
ENV MAIL_HOST = "smtp.gmail.com"
ENV MAIL_MAILER = "smtp"
ENV MAIL_PASSWORD = "precioslibros1234!"
ENV MAIL_PORT = "465"
ENV MAIL_USERNAME = "mejoresprecioslibros@gmail.com" 
ENV SCRAPPING_API = "https://precioslibrosapi-production.up.railway.app"


ENV DB_CONNECTION="pgsql"
ENV DATABASE_URL="postgres://precios_libros_laravel_postgres_user:jFLvgBZ91XIsDA20yvCZGTUAtq22oZdY@dpg-cei4ki9gp3jvlf1f0qfg-a.oregon-postgres.render.com/precios_libros_laravel_postgres"

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]