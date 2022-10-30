# A simple package that makes it easier to set a page title in a Laravel application.

[![GitHub issues](https://img.shields.io/github/issues/aon2003/laravel-page-titles)](https://github.com/aon2003/laravel-page-titles/issues)
[![GitHub forks](https://img.shields.io/github/forks/aon2003/laravel-page-titles)](https://github.com/aon2003/laravel-page-titles/network)
[![GitHub stars](https://img.shields.io/github/stars/aon2003/laravel-page-titles)](https://github.com/aon2003/laravel-page-titles/stargazers)
[![GitHub license](https://img.shields.io/github/license/aon2003/laravel-page-titles)](https://github.com/aon2003/laravel-page-titles/blob/main/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/aon2003/laravel-page-titles.svg)](https://packagist.org/packages/aon2003/laravel-page-titles)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/aon2003/laravel-page-titles/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/aon2003/laravel-page-titles/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/aon2003/laravel-page-titles.svg)](https://packagist.org/packages/aon2003/laravel-page-titles)

This simple package has only one purpose: compacting the job of setting page titles to a single file.

It makes available a global variable `$page_title` in all blade templates and views using a Middleware.

## Support us

[![Buy Me A Coffee](https://cdn.buymeacoffee.com/buttons/default-pink.png)](https://www.buymeacoffee.com/aon4o)

## Installation

You can install the package via composer:

```bash
composer require aon2003/laravel-page-titles
```

Next, you need to publish a config file and a language file:

```bash
php artisan vendor:publish --tag="laravel-page-titles"
```

Lastly, you need to add the custom middleware to your web's middleware group in your `app/Http/Kernel.php` file.

```php
'web' => [
    ...
    \Aon2003\PageTitles\Middleware\PageTitles::class,
],
```

## Usage

For the library to work all your routes MUST be named.
After the installation a global variable `$page_title` will be available in all blade components.
It will contain the name of the current route,
which will be used to match a title that you can configure in the translation file: `lang/en/page_titles.php`.

By default, the `page_titles.php` file contains only two default page titles for route names 'index' and 'home'.

```php
return [
    'index' => env('APP_NAME', 'Home Page'),
    'home' => env('APP_NAME', 'Home Page'),
];
```

You can add your custom titles by adding lines in this file like this:

```php
return [
    ...
    '{route_name}' => '{page_title}',
];
```

Then, in your blade files you should add the following line so the titles are displayed:
```php
<title>{{ __($page_title) }}</title>
```

## Page titles with Variables

If you want to be able to pass variables to your page titles, you should pass them as an array to the view,
add numbered placeholders to the title in the language files
and change the `<title>` tag in the blade files:


`page_titles.php`:
```php
return [
    ...
    'index' => 'Hello, :0!',
];
```

`Controller`:
```php
function index() {
    $page_props = ['Alex'];
    
    return view('{page}', compact('page_props'));
}
```

`{page}.blade.php`:
```html
<title>{{ __($page_title, $page_params ?? []) }}</title>
```

The resulting page title should be: `Hello, Alex!`

## Translations file name

If you want, you could use different translation file name.
The only thing you should do for it to work is to rename the translation files and change the `translation_file_name` variable
in the `page_titles.php` config file to the file name you want to use.

`page_titles.php`:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Translation File Name
    |--------------------------------------------------------------------------
    |
    | Used to find the page titles translations.
    | If you change the translation file name, you MUST change this variable, too!
    |
    */

    'translation_file_name' => 'page-titles',
];
```

## Internationalization

If your project supports internationalization, you can simply add more `{language_code}/page_title.php` files to your `lang` folder.
For more information check out the official [Laravel docs](https://laravel.com/docs/9.x/localization).

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Alex Naida](https://github.com/aon2003)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
