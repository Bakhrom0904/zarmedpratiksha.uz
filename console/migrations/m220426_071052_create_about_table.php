<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m220426_071052_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(200)->notNull(),
            'title_uz' => $this->text()->notNull(),
            'title_ru' => $this->text()->notNull(),
            'title_en' => $this->text()->notNull(),
            'content_uz' => $this->text()->notNull(),
            'content_ru' => $this->text()->notNull(),
            'content_en' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about}}');
    }
}
