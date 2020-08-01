FROM php:apache

WORKDIR /app

COPY composer.* ./

ENV APACHE_DOCUMENT_ROOT /app/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
	sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf && \
	sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf && \
	apt-get update && apt-get install -y unzip && \
	curl -s https://getcomposer.org/installer | php 1> /dev/null && \
	mv composer.phar /bin/composer && \
	composer install --no-autoloader && \
	a2enmod rewrite

COPY . .

RUN composer install && php artisan migrate && php artisan key:generate && chown -R www-data:www-data storage
