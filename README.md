# Web Push

This package allows you to connect into a micro service for handling web push notifications.


### Installation

```bash
composer require jsefton/web-push
```


### Usage

```php
Push::init("API_KEY")
    ->setMode('dev')
    ->send([
        'site' => 'default',
        'payload' => [
            'title' => $data['title'],
            'body' => $data['message']
        ]
    ]);
```

#### Methods

`init`
First method that should be called passing in a valid API key.

`setMode`
Allows to switch between different API modes and domains that are preset.

`setDomain`
Allows to override the API domain that requests are sent too.

`send`
Array of data that is passed onto the API. Requires `payload` as an array of supportted web push data. `site` optional to bind for a specific site.
