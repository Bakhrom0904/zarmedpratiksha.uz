<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pages}}`.
 */
class m220322_094816_create_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pages}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(200)->notNull(),
            'meta' => $this->json(),
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
        $this->dropTable('{{%pages}}');
    }
}
