<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%media_coverage}}`.
 */
class m220406_063536_create_media_coverage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%media_coverage}}', [
            'id' => $this->primaryKey(),
            'link' => $this->text()->notNull(),
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
        $this->dropTable('{{%media_coverage}}');
    }
}
