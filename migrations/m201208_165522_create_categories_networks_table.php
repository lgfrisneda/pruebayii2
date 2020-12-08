<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories_networks}}`.
 */
class m201208_165522_create_categories_networks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories_networks}}', [
            'id' => $this->primaryKey(),
            'network_id' => $this->integer(),
            'category_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categories_networks}}');
    }
}
