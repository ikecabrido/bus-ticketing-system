FROM richarvey/nginx-php-fpm:latest

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV DB_CONNECTION pgsql
ENV DB_HOST dpg-cl9bsd755u5s73d4loi0-a
ENV DB_PORT 5432
ENV DB_DATABASE bus_ticketing_system
ENV DB_USERNAME bus_ticketing_system_user
ENV DB_PASSWORD q4izNbm3Y4nX5UoUfGu0tK21IsEzmkca

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]