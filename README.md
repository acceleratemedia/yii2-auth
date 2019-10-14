# yii2-auth

Contains common RBAC items that can be shared across projects

To use this you need to run migrations which will add the proper objects
to the auth tables.

Add the following to the bootstrap property of your application config
```
    'bootstrap' => [
        \bvb\auth\console\Bootstrap::class
    ],
```

Then run:

```
php yii migrate-auth
```