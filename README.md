# Simple OPcache Status

### Description

Shows status information about the cache.

### Install

- Preferable way is to use [Composer](https://getcomposer.org/):

    ````
    composer require innocode-digital/wp-simple-opcache-status
    ````

  By default, it will be installed as [Must Use Plugin](https://codex.wordpress.org/Must_Use_Plugins).
  It's possible to control with `extra.installer-paths` in `composer.json`.

- Alternate way is to clone this repo to `wp-content/mu-plugins/` or `wp-content/plugins/`:

    ````
    cd wp-content/plugins/
    git clone git@github.com:innocode-digital/wp-simple-opcache-status.git
    cd wp-simple-opcache-status/
    composer install
    ````

If plugin was installed as regular plugin then activate **Simple OPcache Status** from Plugins page
or [WP-CLI](https://make.wordpress.org/cli/handbook/): `wp plugin activate wp-simple-opcache-status`.
