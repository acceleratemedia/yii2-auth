<?php

namespace bvb\auth\console\migrations;

use Yii;
use bvb\auth\ObjectOwnerRule;
use yii\db\Migration;

/**
 * Adds the neccessary auth objects to their appropriate tables for RBAC config
 */
class m181120_024310_add_object_owner_rule extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // --- Create rule for determining if a user owns an object
        $auth = Yii::$app->authManager;
        $objectOwnerRule = new ObjectOwnerRule;
        $auth->add($objectOwnerRule);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $objectOwnerRule = new ObjectOwnerRule;
        $auth->remove($objectOwnerRule);
    }
}
