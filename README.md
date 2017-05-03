# RootRelativeURLs

Overrides the Laravel ~5 `UrlGenerator` class to generate root relative URLs.

Copyright (C) 2017 Pascal Hurni <[https://github.com/phurni](https://github.com/phurni)>

Licensed under the [MIT License](http://opensource.org/licenses/MIT).

## Installation

Add `mortimer/rootrelativeurls` as a requirement to `composer.json`:

```javascript
{
    "require": {
        "mortimer/rootrelativeurls": "dev-master"
    },
    "repositories": [
        {
            "url": "https://github.com/phurni/mortimer-rootrelativeurls.git",
            "type": "git"
        }
    ],
}
```

Update your packages with `composer update` or install with `composer install`.

Then add the service provider in `config/app.php`:

```php
    'providers' => [
        ...
        Mortimer\Rootrelativeurls\RootrelativeurlsServiceProvider::class,
        ...
    ],
```
