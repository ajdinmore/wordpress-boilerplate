<?php

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/wp-config.php';

if (
    // Account for weird behaviour of eval in WP_CLI\Runner::load_wordpress causing null coalescence to fail
    isset ($_SERVER['APP_ENV'])
    && 'dev' === $_SERVER['APP_ENV']
    && class_exists(Symfony\Component\ErrorHandler\Debug::class)
) {
    Symfony\Component\ErrorHandler\Debug::enable();
}

const WP_SITEURL     = WP_HOME . '/core';
const WP_CONTENT_URL = WP_HOME;
const WP_CONTENT_DIR = __DIR__;

const DISALLOW_FILE_EDIT       = true;
const DISALLOW_FILE_MODS       = true;
const DISALLOW_UNFILTERED_HTML = true;

require ABSPATH . 'wp-settings.php';
