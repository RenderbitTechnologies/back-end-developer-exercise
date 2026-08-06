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

# Install Node.js 22 from NodeSource using a keyring + .sources entry (no remote setup script)
RUN mkdir -p /usr/share/keyrings \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key \
        | gpg --dearmor -o /usr/share/keyrings/nodesource.gpg \
    && chmod 644 /usr/share/keyrings/nodesource.gpg \
    && printf '%s\n' \
        'Types: deb' \
        'URIs: https://deb.nodesource.com/node_22.x' \
        'Suites: nodistro' \
        'Components: main' \
        'Architectures: amd64 arm64' \
        'Signed-By: /usr/share/keyrings/nodesource.gpg' \
        > /etc/apt/sources.list.d/nodesource.sources \
    && apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends nodejs \
    && rm -rf /var/lib/apt/lists/*

RUN curl -fsSL https://composer.github.io/installer.sig -o /tmp/composer.sig \
    && curl -fsSL https://getcomposer.org/installer -o /tmp/composer-setup.php \
    && php -r "\$sig = trim(file_get_contents('/tmp/composer.sig')); if (hash_file('sha384', '/tmp/composer-setup.php') !== \$sig) { fwrite(STDERR, 'Composer installer corrupt' . PHP_EOL); exit(1); }" \
    && php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm /tmp/composer.sig /tmp/composer-setup.php
