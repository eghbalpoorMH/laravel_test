FROM roshangara/laravel:v2.1-php8-1-2

USER www-data

COPY composer* ./

RUN COMPOSER_MEMORY_LIMIT=-1 composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --ignore-platform-reqs \
    --optimize-autoloader \
    --apcu-autoloader \
    --ansi \
    --no-scripts;

COPY --chown=www-data:www-data . ./

RUN composer dump-autoload --optimize && \
    composer run-script post-autoload-dump && composer run-script post-update-cmd
