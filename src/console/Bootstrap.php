<?php

namespace bvb\auth\console;

use Yii;
use yii\base\BootstrapInterface;

/**
 * @deprecated To avoid further configuration, users are encouraged to use
 * the CLI commands in the readme to apply the migrations rather than use
 * the command created by this bootstrap
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * Apply configuration to the console so that we can see the migration commands
     * @return void
     */
    public function bootstrap($app)
    {
        Yii::$app->controllerMap['migrate-auth'] = [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationNamespaces' => ['bvb\auth\console\migrations'],
            'migrationTable' => 'm_bvb_auth',
            'migrationPath' => null // This seems to make sure it doesn't pick up other migrations when using the migrate-user command
        ];
    }
}