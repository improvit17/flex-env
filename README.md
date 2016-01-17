![flex-env](https://cloud.githubusercontent.com/assets/11269635/12333265/7e4a8620-baf3-11e5-8baf-0df225a3d481.jpg)

# Laravel FlexEnv

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)

This package adds a handful of useful commands to edit your `.env` file in
[Laravel](https://laravel.com) without leaving the command prompt.

## Install

Via [composer](http://getcomposer.org):

```bash
$ composer require sven/flex-env
```

Next, add the `FlexEnvServiceProvider` to your `providers` array in `config/app.php`:

```php
// config/app.php
'providers' => [
    ...
    Sven\FlexEnv\FlexEnvServiceProvider::class,
    ...
]
```

## Usage
The commands in this package should now be registered. Simply run `php artisan`,
and you will see them in the list.

```bash
# Add a new key/value pair to your .env file:
$ php artisan env:new {key} {value}

# Edit a value in your .env file:
$ php artisan env:set {key} {value}

# Delete a key/value pair from your .env file:
$ php artisan env:delete {key}
```

The changes should now be reflected in your `.env` file.

## Contributing
Inspiration for this package came from [LeShadow's ArtisanExtended](https://github.com/LeShadow/ArtisanExtended).

All contributions (in the form of pull requests, issues and feature-requests) are
welcome and will always be properly credited.

## License
`sven/flex-env` is licenced under the MIT License (MIT). See the [license file](LICENSE.md)
for more information.

[ico-version]: https://img.shields.io/packagist/v/sven/flex-env.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-green.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sven/flex-env.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sven/flex-env
[link-downloads]: https://packagist.org/packages/sven/flex-env
