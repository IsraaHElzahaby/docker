FROM php:8.2-fpm-alpine

ARG CONTAINER_USER
ARG CONTAINER_USER_ID

RUN echo ${CONTAINER_USER}

# Create a new user
RUN adduser --uid=${CONTAINER_USER_ID} ${CONTAINER_USER} --ingroup=www-data --ingroup=root --disabled-password

# Add the user to sudo & www-data groups
#RUN usermod -aG sudo,www-data ${CONTAINER_USER}
#USER ${CONTAINER_USER}

RUN apk add $PHPIZE_DEPS linux-headers curl nano bash icu-dev git nodejs npm --no-cache\
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer\
    && composer global require friendsofphp/php-cs-fixer\
    && curl -sS https://get.symfony.com/cli/installer | bash\
    && pecl install xdebug-3.2.2 redis-5.3.7\
    && docker-php-ext-enable xdebug redis\
    && docker-php-ext-install pdo_mysql mysqli intl\
    && npm install yarn -g\
    && apk del --purge $PHPIZE_DEPS

ENV PATH $PATH:/root/.composer/vendor/bin:/root/.symfony5/bin

# Configure nginx & PHP-FPM
COPY PHP/fpm-pool.conf /etc/php8/php-fpm.d/www.conf
COPY PHP/php.ini /etc/php8/conf.d/custom.ini
COPY PHP/docker-entrypoint.sh /

RUN ["chmod", "+x", "/docker-entrypoint.sh"]

WORKDIR /var/www/html

EXPOSE 80
ENTRYPOINT ["/docker-entrypoint.sh"]
CMD ["symfony", "server:start", "--port=80"]
