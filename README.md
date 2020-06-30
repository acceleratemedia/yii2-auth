# yii2-auth

Contains common RBAC items that can be shared across projects

To use this you need to run migrations which will add the proper objects
to the auth tables.
```
php yii migrate --migrationPath='@vendor/brianvb/yii2-auth/src/console/migrations', \
	--migrationTable=m_bvb_auth \
	--interactive=0
```
