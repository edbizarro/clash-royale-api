# Clash Royale API

<p align="center">
    <img src="https://developer.clashroyale.com/l_retina.526bc4.png">
</p>
<p align="center" style="margin: 30px 0 35px;">PHP Wrapper for the Official <a href="https://developer.clashroyale.com"> Clash Royale API</a>.</p>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/edbizarro/clash-royale-api.svg?style=flat-square)](https://packagist.org/packages/edbizarro/clash-royale-api)
[![Build Status](https://img.shields.io/travis/edbizarro/clash-royale-api/master.svg?style=flat-square)](https://travis-ci.org/edbizarro/clash-royale-api)
[![Quality Score](https://img.shields.io/scrutinizer/g/edbizarro/clash-royale-api.svg?style=flat-square)](https://scrutinizer-ci.com/g/edbizarro/clash-royale-api)
[![Total Downloads](https://img.shields.io/packagist/dt/edbizarro/clash-royale-api.svg?style=flat-square)](https://packagist.org/packages/edbizarro/clash-royale-api)

## Installation

You can install the package via composer:

```bash
composer require edbizarro/clash-royale-api
```

## Usage

Example get clan info

``` php
<?php
use Edbizarro\ClashRoyale\Api;
use Edbizarro\ClashRoyale\Clan;

...

Api::setToken($apiToken); // @see https://developer.clashroyale.com

$clan = new Clan('clan_tag');

var_dump($clan->get());

```


Search for a clan

``` php
<?php
use Edbizarro\ClashRoyale\Api;
use Edbizarro\ClashRoyale\Clan;

...

Api::setToken($apiToken);

$clan = new Clan();

var_dump($clan->search(['name' => 'clan name']));

```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Eduardo Bizarro](https://github.com/edbizarro)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
