web: (cd /app && cp .env.example .env && php artisan key:generate && php artisan migrate) && ([ -e /app/storage ] && chmod -R ugo+w /app/storage && [ -e /app/bootstrap/cache ] && chmod -R ugo+w /app/bootstrap/cache); perl /assets/transform-config.pl /assets/nginx.template.conf /nginx.conf && echo "Server starting on port $PORT" && (php-fpm -y /assets/php-fpm.conf & nginx -c /nginx.conf)
