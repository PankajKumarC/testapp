FROM php:7.4.10-fpm-alpine



RUN apk update
    
RUN apk add --no-cache zlib-dev icu-dev libzip-dev unzip gnu-libiconv file libmcrypt-dev libmcrypt libpng-dev libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip xml 

RUN apk add wget \
    && rm -rf /var/lib/apt/lists/*

RUN wget https://download.microsoft.com/download/e/4/e/e4e67866-dffd-428c-aac7-8d28ddafb39b/msodbcsql17_17.5.2.2-1_amd64.apk && \
    wget https://download.microsoft.com/download/e/4/e/e4e67866-dffd-428c-aac7-8d28ddafb39b/mssql-tools_17.5.2.1-1_amd64.apk && \
    apk add --allow-untrusted msodbcsql17_17.5.2.2-1_amd64.apk && \
    apk add --allow-untrusted mssql-tools_17.5.2.1-1_amd64.apk && \
    apk add --no-cache --virtual .phpize-deps $PHPIZE_DEPS unixodbc-dev && \
    pecl install pdo_sqlsrv && \
    pecl install sqlsrv && \
    docker-php-ext-enable pdo_sqlsrv && \
    docker-php-ext-enable sqlsrv 
   
    

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

# Set timezone
#RUN rm /etc/localtime
#RUN ln -s /usr/share/zoneinfo/Europe/Berlin /etc/localtime
#RUN "date"
#RUN /var/www/symfony


WORKDIR /var/www/symfony


CMD ["php-fpm"]