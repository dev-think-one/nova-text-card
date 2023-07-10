# Nova Text Card

![Packagist License](https://img.shields.io/packagist/l/think.studio/nova-text-card?color=%234dc71f)
[![Packagist Version](https://img.shields.io/packagist/v/think.studio/nova-text-card)](https://packagist.org/packages/think.studio/nova-text-card)
[![Total Downloads](https://img.shields.io/packagist/dt/think.studio/nova-text-card)](https://packagist.org/packages/think.studio/nova-text-card)
[![Build Status](https://scrutinizer-ci.com/g/dev-think-one/nova-text-card/badges/build.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/nova-text-card/build-status/main)
[![Code Coverage](https://scrutinizer-ci.com/g/dev-think-one/nova-text-card/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/nova-text-card/?branch=main)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dev-think-one/nova-text-card/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/nova-text-card/?branch=main)

Simple card to display html and text. Useful to group blocks and group titles.

| Nova  | Package |
|-------|---------|
| V4    | V1      |

### Install

```bash
composer require think.studio/nova-text-card
```

### Usage

```php
<?php
class Main extends Dashboard
{
    public function cards()
    {
        return [
              \NovaTextCard\NovaTextCard::make()
                ->width('full')
                ->content('<h1 class="text-center text-3xl text-gray-500 font-light">Welcome to the application!</h1>')
        ];
    }
}
```

![nova-text-card](./assets/images/nova-text-card.png)

## Credits

- [![Think Studio](https://yaroslawww.github.io/images/sponsors/packages/logo-think-studio.png)](https://think.studio/)
