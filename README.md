# PHP Helpers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/antonioprimera/php-helpers.svg?style=flat-square)](https://packagist.org/packages/antonioprimera/php-helpers)
[![Tests](https://img.shields.io/github/actions/workflow/status/antonioprimera/php-helpers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/antonioprimera/php-helpers/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/antonioprimera/php-helpers.svg?style=flat-square)](https://packagist.org/packages/antonioprimera/php-helpers)

This is a lightweight set of php helpers, providing some missing or hard to achieve functionality in PHP, without the
need to import some larger packages. This package is intended to be used in PHP Packages and projects, which are not
using a framework like Laravel or Symfony (which already provide these functionalities).

## Helpers

### Array Helpers

- `arrayMap($array, $callback)` - Maps an array using a callback function, preserving the keys
- `arrayMapWithKeys($array, $callback)` - Maps an array using a callback function, allowing you to also change the keys

### String Helpers

- kebabCase($string) - Converts a string to kebab-case
- classBasename($classOrObject) - Returns the class name without the namespace

## Installation

You can install the package via composer:

```bash
composer require antonioprimera/php-helpers
```

## Contributing

Please be free to contribute to this package by submitting a pull request with any useful helper functions you might
have. Please make sure to add tests for any new functionality.

This package will only contain basic helper functions, which are not already provided by PHP itself or which are hard
to achieve in just one line with the built-in functions.

## Credits

- [Antonio Primera](https://github.com/AntonioPrimera)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
