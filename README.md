# Authorize HTTP Client Manager for Laravel
[![Build Status](https://travis-ci.org/kawax/authorize.svg?branch=master)](https://travis-ci.org/kawax/authorize)

Work in progress.

## Requirements
- PHP >= 7.0
- Laravel >= 5.5

## Installation

```
composer require revolution/authorize:dev-master
```

## Demo
https://github.com/kawax/authorize-project

## Usage
```php
    $credentials = [
        'mail'     => '',
        'password' => '',
    ];

    if (Authorize::driver('sample')->login($credentials)) {
        /**
         * @var \Goutte\Client $client
         */
        $client = Authorize::driver('sample')->client();
        dump($client);
    }
```

See demo project and docs.


## LICENSE
MIT  
Copyright kawax
