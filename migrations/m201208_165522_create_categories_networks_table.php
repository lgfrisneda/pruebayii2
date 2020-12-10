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

        $this->createIndex(
            'idx-categories_networks-network_id',
            'categories_networks',
            'network_id'
        );

        $this->addForeignKey(
            'fk-categories_networks-network_id',
            'categories_networks',
            'network_id',
            'networks',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-categories_networks-network_id',
            'categories_networks'
        );

        $this->dropIndex(
            'idx-categories_networks-network_id',
            'categories_networks'
        );

        $this->dropTable('{{%categories_networks}}');
    }
}
