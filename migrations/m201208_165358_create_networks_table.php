<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%networks}}`.
 */
class m201208_165358_create_networks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%networks}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'facebook' => $this->string(),
            'description' => $this->text(),
            'country' => $this->string(),
            'language' => $this->string(),
            'advertising' => $this->integer(),
            'image' => $this->string(),
            'vacation_from' => $this->string(),
            'vacation_to' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%networks}}');
    }
}
