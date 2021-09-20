# Andy's WordPress Boilerplate

For now, this is really just here for my use/reference, further updates are needed, but aren't currently planned.

Drop-in support via Composer hasn't been tested because none exist in Packagist that have the correct config as
described in the pull request: https://github.com/composer/installers/pull/265

## Setup Example: WooCommerce Store
```shell
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
