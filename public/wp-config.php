<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/wp-config.php';

if ('dev' === $_SERVER['APP_ENV']) {
    \Symfony\Component\ErrorHandler\Debug::enable();
}

const WP_SITEURL     = WP_HOME . '/core';
const WP_CONTENT_URL = WP_HOME;
const WP_CONTENT_DIR = __DIR__;

require ABSPATH . 'wp-settings.php';
