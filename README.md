# A basic auth scaffolding for laravel using Tailwindcss and Fortify

[![Latest Version on Packagist](https://img.shields.io/packagist/v/awcodes/laravel-auth-scaffold.svg?style=flat-square)](https://packagist.org/packages/awcodes/laravel-auth-scaffold)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/awcodes/laravel-auth-scaffold/run-tests?label=tests)](https://github.com/awcodes/laravel-auth-scaffold/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/awcodes/laravel-auth-scaffold.svg?style=flat-square)](https://packagist.org/packages/awcodes/laravel-auth-scaffold)


This is just a basic auth scaffolding for Laravel Fortify. If you want to use it great, if not, so be it.

## Installation

You can install the package via composer:

```bash
composer require awcodes/laravel-auth-scaffold
```

You can publish the views with:
```bash
php artisan vendor:publish --provider="Awcodes\Auth\AuthServiceProvider" --tag="views"
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [awcodes](https://github.com/awcodes)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
