#!/usr/bin/env bash
set -euo pipefail

cd "$(dirname "$0")/.."

composer install --no-interaction --prefer-dist
npm ci

if [ ! -f .env ]; then
  cp .env.example .env
fi

# Always configure SQLite for the Cursor environment so a pre-existing
# DB_CONNECTION=sqlite with an empty/incompatible DB_DATABASE cannot break migrate.
sed -i 's/^DB_CONNECTION=.*/DB_CONNECTION=sqlite/' .env
sed -i 's/^DB_HOST=.*/# DB_HOST=127.0.0.1/' .env
sed -i 's/^DB_PORT=.*/# DB_PORT=3306/' .env
sed -i "s|^DB_DATABASE=.*|DB_DATABASE=$(pwd)/database/database.sqlite|" .env
sed -i 's/^DB_USERNAME=.*/# DB_USERNAME=root/' .env
sed -i 's/^DB_PASSWORD=.*/# DB_PASSWORD=/' .env

mkdir -p database
touch database/database.sqlite

if ! grep -q '^APP_KEY=base64:' .env; then
  php artisan key:generate --ansi
fi

php artisan migrate --force
