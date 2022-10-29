# A simple package that makes it easier to set a page title in a Laravel application.

[![GitHub issues](https://img.shields.io/github/issues/aon2003/laravel-page-titles)](https://github.com/aon2003/laravel-page-titles/issues)
[![GitHub forks](https://img.shields.io/github/forks/aon2003/laravel-page-titles)](https://github.com/aon2003/laravel-page-titles/network)
[![GitHub stars](https://img.shields.io/github/stars/aon2003/laravel-page-titles)](https://github.com/aon2003/laravel-page-titles/stargazers)
[![GitHub license](https://img.shields.io/github/license/aon2003/laravel-page-titles)](https://github.com/aon2003/laravel-page-titles/blob/main/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/aon2003/laravel-page-titles.svg)](https://packagist.org/packages/aon2003/laravel-page-titles)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/aon2003/laravel-page-titles/run-tests?label=tests)](https://github.com/aon2003/laravel-page-titles/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/aon2003/laravel-page-titles/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/aon2003/laravel-page-titles/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/aon2003/laravel-page-titles.svg)](https://packagist.org/packages/aon2003/laravel-page-titles)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-page-titles.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-page-titles)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require aon2003/laravel-page-titles
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-page-titles-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-page-titles-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-page-titles-views"
```

## Usage

```php
$pageTitles = new Aon2003\PageTitles();
echo $pageTitles->echoPhrase('Hello, Aon2003!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alex Naida](https://github.com/aon2003)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
