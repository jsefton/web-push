# web-push


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