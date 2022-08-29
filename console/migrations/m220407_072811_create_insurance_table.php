<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%insurance}}`.
 */
class m220407_072811_create_insurance_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%insurance}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(120)->notNull(),
            'title_uz' => $this->string(200)->notNull(),
            'title_ru' => $this->string(200)->notNull(),
            'title_en' => $this->string(200)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%insurance}}');
    }
}
