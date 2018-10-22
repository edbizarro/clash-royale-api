# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/edbizarro/clash-royale-api.svg?style=flat-square)](https://packagist.org/packages/edbizarro/clash-royale-api)
[![Build Status](https://img.shields.io/travis/edbizarro/clash-royale-api/master.svg?style=flat-square)](https://travis-ci.org/edbizarro/clash-royale-api)
[![Quality Score](https://img.shields.io/scrutinizer/g/edbizarro/clash-royale-api.svg?style=flat-square)](https://scrutinizer-ci.com/g/edbizarro/clash-royale-api)
[![Total Downloads](https://img.shields.io/packagist/dt/edbizarro/clash-royale-api.svg?style=flat-square)](https://packagist.org/packages/edbizarro/clash-royale-api)

PH Wrapper for the Official [Clash Royale API](mhttps://developer.clashroyale.com).

## Installation

You can install the package via composer:

```bash
composer require edbizarro/clash-royale-api
```

## Usage

Example get clan info

``` php
<?php

Api::setToken($apiToken);

$clan = new Clan('clan_tag');

var_dump($clan->get());

```


Search for a clan

``` php
<?php

Api::setToken($apiToken);

$clan = new Clan();

var_dump($clan->search(['name' => 'clan name']));

```

### Testing

``` bash
composer test
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
