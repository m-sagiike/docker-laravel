FROM php:7.4.1-fpm
COPY php.ini /usr/local/etc/php/

RUN apt update
# RUN apt install -y wget git unzip libpq-dev

# Install Node.js 14
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

# Install PHP Extensions
RUN apt install -y zlib1g-dev mariadb-client libzip-dev libonig-dev \
  && docker-php-ext-install zip pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && composer self-update

WORKDIR /var/www

# php-fpmはデフォルトのユーザwww-dataで動く。https://stackoverflow.com/questions/48619445/permission-denied-error-using-laravel-docker
# 変更する場合は /usr/local/etc/php-fpm.d/www.conf でユーザー名を変える。
RUN chown -R www-data:www-data /var/www

RUN composer global require "laravel/installer"