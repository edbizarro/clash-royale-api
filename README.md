# Clash Royale API

<p align="center">
    <img src="https://developer.clashroyale.com/l_retina.526bc4.png">
</p>
<p align="center" style="margin: 30px 0 35px;">PHP Wrapper for the Official <a href="https://developer.clashroyale.com"> Clash Royale API</a>.</p>
<p align="center" style="margin: 30px 0 35px;">clash-royale-api - Transform your data</p>
<p align="center">
  <a href='https://semaphoreci.com/edbizarro/clash-royale-api'> <img src='https://semaphoreci.com/api/v1/edbizarro/clash-royale-api/branches/master/badge.svg' alt='Build Status'></a>  
  <a href="https://styleci.io/repos/129276226"><img src="https://styleci.io/repos/129276226/shield?branch=master" alt="StyleCI"></a>  
  <a href="https://codeclimate.com/github/edbizarro/clash-royale-api/maintainability"><img src="https://api.codeclimate.com/v1/badges/25524f733a23fb514c5c/maintainability" /></a>
  <a href="https://packagist.org/packages/power-data-hub/clash-royale-api"><img src="https://poser.pugx.org/power-data-hub/clash-royale-api/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/power-data-hub/clash-royale-api"><img src="https://poser.pugx.org/power-data-hub/clash-royale-api/license.svg" alt="License"></a>
    <a href="https://app.fossa.io/projects/git%2Bgithub.com%2Fedbizarro%2Fclash-royale-api?ref=badge_shield" alt="FOSSA Status"><img src="https://app.fossa.io/api/projects/git%2Bgithub.com%2Fedbizarro%2Fclash-royale-api.svg?type=small"/></a>
</p>

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

If you discover any security related issues, please email edbizarro@gmail.com instead of using the issue tracker.

## Credits

- [Eduardo Bizarro](https://github.com/edbizarro)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
