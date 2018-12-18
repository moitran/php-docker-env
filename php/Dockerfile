FROM php:7.1-fpm


WORKDIR /root

RUN apt-get update --fix-missing && apt-get install -y \
    vim \
    libmemcached-dev \
    zlib1g-dev \
    libmcrypt-dev \
    libjpeg-dev \
    libpng-dev \
    libicu-dev \
    libcurl3-dev \
    libxml2-dev \
    libc-client-dev \
    libkrb5-dev

RUN docker-php-ext-configure intl
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl

# Addition
RUN docker-php-ext-install pdo pdo_mysql zip mbstring gd intl curl xml imap mysqli

# Install the php memcached extension
RUN curl -L -o /tmp/memcached.tar.gz "https://github.com/php-memcached-dev/php-memcached/archive/php7.tar.gz" \
  && mkdir -p memcached \
  && tar -C memcached -zxvf /tmp/memcached.tar.gz --strip 1 \
  && ( \
    cd memcached \
    && phpize \
    && ./configure \
    && make -j$(nproc) \
    && make install \
  ) \
  && rm -r memcached \
  && rm /tmp/memcached.tar.gz \
  && docker-php-ext-enable memcached

# Xdebug
RUN curl -L http://xdebug.org/files/xdebug-2.5.5.tgz > xdebug-2.5.5.tgz \
  && tar -xf xdebug-2.5.5.tgz \
  && cd xdebug-2.5.5 \
  && phpize \
  && ./configure \
  && make && make install