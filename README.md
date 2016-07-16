PHP String functions
====================

[![Package version](http://img.shields.io/packagist/v/baguette/string-functions.svg?style=flat)](https://packagist.org/packages/baguette/string-functions)
[![Build Status](https://travis-ci.org/BaguettePHP/StringFunctions.svg?branch=master)](https://travis-ci.org/BaguettePHP/StringFunctions)
[![Packagist](http://img.shields.io/packagist/dt/baguette/string-functions.svg?style=flat)](https://packagist.org/packages/baguette/string-functions)
[![Coverage Status](https://coveralls.io/repos/BaguettePHP/StringFunctions/badge.svg)](https://coveralls.io/r/BaguettePHP/StringFunctions)

## Installation

```
composer require baguette/string-functions
```

## Functions

### `bool str_start_with(string $haystack, string $needle)`

```php
var_dump(str_start_with('Windows', 'Win')); // => true
```

### `bool str_end_with(string $haystack, string $needle)`

```php
var_dump(str_end_with('FooClassTest', 'Test')); // => true
```
