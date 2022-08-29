<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%certificates}}`.
 */
class m220425_155335_create_certificates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%certificates}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(120)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%certificates}}');
    }
}
