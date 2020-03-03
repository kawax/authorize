# Authorize HTTP Client Manager
[![Build Status](https://travis-ci.org/kawax/authorize-manager.svg?branch=master)](https://travis-ci.org/kawax/authorize-manager)

Work in progress.

## Requirements
- PHP >= 7.2
- Laravel >= 6.0

## Installation

```
composer require revolution/authorize-manager:dev-master
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
        // client with login cookie.
        dump($client);
    }
```

See demo project and docs.

## LICENSE
MIT  
Copyright kawax
