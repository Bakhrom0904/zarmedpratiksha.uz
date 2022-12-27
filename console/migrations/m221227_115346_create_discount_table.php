<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%discount}}`.
 */
class m221227_115346_create_discount_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%discount}}', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->text(),
            'title_ru' => $this->text(),
            'title_en' => $this->text(),
            'short_uz' => $this->text(),
            'short_ru' => $this->text(),
            'short_en' => $this->text(),
            'description_uz' => $this->text(),
            'description_ru' => $this->text(),
            'description_en' => $this->text(),
            'foto' => $this->string(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE NOW()'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%discount}}');
    }
}
