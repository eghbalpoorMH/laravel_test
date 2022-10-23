FROM roshangara/laravel:v2.1-php8-1-2

RUN ash -c "$(wget https://raw.github.com/roshangara/development/v1/scripts/development.sh -O -)"

RUN apk add --update --no-cache npm

RUN mv /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini.back
