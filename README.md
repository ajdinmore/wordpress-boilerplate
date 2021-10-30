# Andy's WordPress Boilerplate

Drop-in support via Composer hasn't been tested because
[none exist in Packagist](https://packagist.org/explore/?type=type:wordpress-dropin)
that have the correct config, as described in the
[pull request](https://github.com/composer/installers/pull/265)

Included Docker setup is intended for local dev use only;
the image is thrown together, and I've no idea how secure it is.

## Setup Examples
Ready for lazy copy & paste.

### WooCommerce store, local server/PHP
```shell
composer create-project ajdinmore/wordpress-boilerplate wp-dev-site &&
cd wp-dev-site &&
composer require wpackagist-plugin/woocommerce wpackagist-theme/storefront &&
vendor/bin/wp core install --skip-email \
  --url=localhost \
  --title='My Dev Store' \
  --admin_user=admin \
  --admin_password=admin \
  --admin_email=admin@example.com &&
vendor/bin/wp theme activate storefront &&
vendor/bin/wp plugin activate woocommerce
```

### Basic dev site, Docker only
```shell
docker run --rm -it \
--user $(id -u):$(id -g) \
--volume $(pwd):/app \
ajdinmore/php-dev \
composer create-project --no-install ajdinmore/wordpress-boilerplate wp-dev-site &&
cd wp-dev-site &&
docker-compose up -d &&
docker-compose exec -u $(id -u):$(id -g) web bash -c \
'composer require wpackagist-theme/twentytwentyone &&
printf "Waiting for DB..." &&
until mysql -h db -u wordpress -pwordpress wordpress -e "select 1" > /dev/null 2>&1
do sleep 1; printf "."; done && echo &&
vendor/bin/wp core install --skip-email \
  --url=localhost \
  --title="My Dev Site" \
  --admin_user=admin \
  --admin_password=admin \
  --admin_email=admin@example.com' &&
docker-compose stop && docker-compose up
```
