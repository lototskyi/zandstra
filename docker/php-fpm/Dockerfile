FROM php:7.4.3-fpm
WORKDIR "/application"

RUN apt -yqq update
RUN apt -yqq install libxml2-dev
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install xml

# Install git
RUN apt-get update \
    && apt-get -y install git \
	&& apt-get install -y libzip-dev zlib1g-dev; docker-php-ext-install zip \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
	
###xdebug###
RUN yes | pecl install xdebug \
	&& docker-php-ext-enable xdebug
COPY docker-xdebug.ini	/usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV PATH /usr/local/go/bin:$PATH