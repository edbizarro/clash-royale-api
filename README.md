<p align="center">
    <img src="https://developer.clashroyale.com/l_retina.526bc4.png">
</p>
<p align="center" style="margin: 30px 0 35px;">PHP Wrapper for the Official <a href="https://developer.clashroyale.com"> Clash Royale API</a>.</p>
<p align="center">
  <a href='https://semaphoreci.com/edbizarro/clash-royale-api'> <img src='https://semaphoreci.com/api/v1/edbizarro/clash-royale-api/branches/master/badge.svg' alt='Build Status'></a>  
  <a href="https://github.styleci.io/repos/154075287"><img src="https://github.styleci.io/repos/154075287/shield?branch=master" alt="StyleCI"></a>  
  <a href="https://codeclimate.com/github/edbizarro/clash-royale-api/maintainability"><img src="https://api.codeclimate.com/v1/badges/d9f87681a2cd5e496c63/maintainability" /></a>
  <a href="https://packagist.org/packages/edbizarro/clash-royale-api"><img src="https://poser.pugx.org/edbizarro/clash-royale-api/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/edbizarro/clash-royale-api"><img src="https://poser.pugx.org/edbizarro/clash-royale-api/license.svg" alt="License"></a>  
</p>

## Installation

You can install the package via composer:

```bash
composer require edbizarro/clash-royale-api
```

## Usage

> Before use this library visit [https://developer.clashroyale.com](https://developer.clashroyale.com) to get an API TOKEN

Make sure to initialize the API `
Api::setApiToken($apiToken)` with a valid token before making requests 

### Clan

#### Info

``` php
<?php
use Edbizarro\ClashRoyale\Clan;

$clan = new Clan('clan_tag');
$clan->get();

```

#### Search

``` php
<?php
use Edbizarro\ClashRoyale\Clan;

$clan = new Clan();
$clan->search(['name' => 'clan name']);

```
List [with all search parameters](https://developer.clashroyale.com/api-docs/index.html#!/clans/searchClans)

#### Members

``` php
<?php
use Edbizarro\ClashRoyale\Clan;

$clan = new Clan('clan_tag');
$clan->members();

``` 
List [with all members parameters](https://developer.clashroyale.com/api-docs/index.html#!/clans/getClanMembers)

#### War Log

``` php
<?php
use Edbizarro\ClashRoyale\Clan;

$clan = new Clan('clan_tag');
$clan->warlog();

``` 
List [with all warlog parameters](https://developer.clashroyale.com/api-docs/index.html#!/clans/getClanWarLog)

#### Current War

``` php
<?php
use Edbizarro\ClashRoyale\Clan;

$clan = new Clan('clan_tag');
$clan->currentWar();

``` 
List [with all current war parameters](https://developer.clashroyale.com/api-docs/index.html#!/clans/getCurrentWar)

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
