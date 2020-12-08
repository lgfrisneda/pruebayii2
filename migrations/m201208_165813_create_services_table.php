<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%services}}`.
 */
class m201208_165813_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%services}}', [
            'id' => $this->primaryKey(),
            'network_id' => $this->integer()->notNull(),
            'photo' => $this->string(),
            'value_photo' => $this->string(),
            'discount_photo' => $this->string(),
            'video' => $this->string(),
            'value_video' => $this->string(),
            'discount_video' => $this->string(),
            'story' => $this->string(),
            'value_story' => $this->string(),
            'discount_story' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%services}}');
    }
}
