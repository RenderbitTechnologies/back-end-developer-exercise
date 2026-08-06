FROM ubuntu:24.04

RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        ca-certificates \
        curl \
        git \
        gnupg \
        unzip \
        sqlite3 \
        php8.3-cli \
        php8.3-mbstring \
        php8.3-xml \
        php8.3-curl \
        php8.3-zip \
        php8.3-sqlite3 \
        php8.3-mysql \
        php8.3-bcmath \
        php8.3-intl \
    && rm -rf /var/lib/apt/lists/*

# tokenizer and fileinfo are provided by php8.3-common (pulled in via php8.3-cli)

RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends nodejs \
    && rm -rf /var/lib/apt/lists/*

RUN php -r "copy('https://composer.github.io/installer.sig', 'php://stdout');" > /tmp/composer.sig \
    && curl -fsSL https://getcomposer.org/installer -o /tmp/composer-setup.php \
    && php -r "\$sig = trim(file_get_contents('/tmp/composer.sig')); if (hash_file('sha384', '/tmp/composer-setup.php') !== \$sig) { fwrite(STDERR, 'Composer installer corrupt' . PHP_EOL); exit(1); }" \
    && php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm /tmp/composer.sig /tmp/composer-setup.php
