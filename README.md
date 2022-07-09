# Nova Text Card

[![Packagist License](https://img.shields.io/packagist/l/yaroslawww/nova-text-card?color=%234dc71f)](https://github.com/yaroslawww/nova-text-card/blob/master/LICENSE.md)
[![Packagist Version](https://img.shields.io/packagist/v/yaroslawww/nova-text-card)](https://packagist.org/packages/yaroslawww/nova-text-card)
[![Total Downloads](https://img.shields.io/packagist/dt/yaroslawww/nova-text-card)](https://packagist.org/packages/yaroslawww/nova-text-card)
[![Build Status](https://scrutinizer-ci.com/g/yaroslawww/nova-text-card/badges/build.png?b=master)](https://scrutinizer-ci.com/g/yaroslawww/nova-text-card/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/yaroslawww/nova-text-card/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yaroslawww/nova-text-card/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yaroslawww/nova-text-card/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yaroslawww/nova-text-card/?branch=master)

| Nova  | Package |
|-------|---------|
| V4    | V1      |

### Install

```bash
composer require yaroslawww/nova-text-card
```

### Usage

```php
<?php
class Main extends Dashboard
{
    public function cards()
    {
        return [
            (new \NovaTextCard\NovaTextCard)
                ->width('full')
                ->content('Welcome to application!')
        ];
    }
}
```

![nova-text-card](./assets/images/nova-text-card.png)
