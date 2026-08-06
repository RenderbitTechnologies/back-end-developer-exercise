FROM ubuntu:24.04

RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        php8.3-cli \
        php8.3-mbstring \
        php8.3-xml \
        php8.3-curl \
        php8.3-zip \
        php8.3-sqlite3 \
        php8.3-mysql \
        php8.3-bcmath \
        php8.3-tokenizer \
        php8.3-fileinfo \
        php8.3-intl \
        git \
        curl \
        unzip \
        sqlite3 \
        ca-certificates \
    && rm -rf /var/lib/apt/lists/* \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
