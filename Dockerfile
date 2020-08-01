FROM php:apache

WORKDIR /app

COPY . .

ENV APACHE_DOCUMENT_ROOT /app/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
	sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf && \
	sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf && \
	apt-get update && apt-get install -y unzip && \
	curl -s https://getcomposer.org/installer | php 1> /dev/null && \
	mv composer.phar /bin/composer && \
	composer install && \
	a2enmod rewrite && \
	usermod -u 1000 www-data && \
	groupmod -g 1000 www-data && \
	php artisan migrate && \
	chown -R www-data:www-data storage

ENTRYPOINT php artisan key:generate && apache2-foreground
