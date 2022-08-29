<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%social}}`.
 */
class m220404_095736_create_social_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%social}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(30),
            'key' => $this->string(30)->notNull(),
            'value' => $this->string(250)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%social}}');
    }
}
