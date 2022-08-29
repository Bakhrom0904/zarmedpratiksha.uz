<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%job}}`.
 */
class m220411_084915_create_job_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%job}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(120)->notNull(),
            'link' => $this->string(200)->notNull(),
            'title_uz' => $this->string(200)->notNull(),
            'title_ru' => $this->string(200)->notNull(),
            'title_en' => $this->string(200)->notNull(),
            'description_uz' => $this->text()->notNull(),
            'description_ru' => $this->text()->notNull(),
            'description_en' => $this->text()->notNull(),
            'published_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%job}}');
    }
}
