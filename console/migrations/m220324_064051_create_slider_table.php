<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%slider}}`.
 */
class m220324_064051_create_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(120)->notNull(),
            'status' => "ENUM('active','inactive') NOT NULL DEFAULT 'inactive'",
            'title_uz' => $this->text()->notNull(),
            'title_ru' => $this->text()->notNull(),
            'title_en' => $this->text()->notNull(),
            'description_uz' => $this->text()->notNull(),
            'description_ru' => $this->text()->notNull(),
            'description_en' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%slider}}');
    }
}
