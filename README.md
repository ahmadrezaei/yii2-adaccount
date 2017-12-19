## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ahmadrezaei/yii-adaccount "*"
```

or add

```json
"ahmadrezaei/yii-adaccount": "*"
```

to the `require` section of your composer.json.

## Usage

You must read the yii2-authclient [docs](https://github.com/yiisoft/yii2/blob/master/docs/guide/security-auth-clients.md)

and add the adaccount client to your auth clients.

```php
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'adaccount' => [
                'class' => 'ahmadrezaei\yii\authclient\Adaccount',
                    'clientId' => 'adaccount_client_id',
                    'clientSecret' => 'adaccount_client_secret',
                ],
            ],
            // other clients
        ],
    ],
    // ...
 ]
 ```