web: (cd /app && cp .env.example .env && php artisan key:generate && php artisan migrate && npm install && npm run build) && ([ -e /app/storage ] && chmod -R ugo+w /app/storage); perl /assets/transform-config.pl /assets/nginx.template.conf /nginx.conf && echo "Server starting on port $PORT" && (php-fpm -y /assets/php-fpm.conf & nginx -c /nginx.conf)
