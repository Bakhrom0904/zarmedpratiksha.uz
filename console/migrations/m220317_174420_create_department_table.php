<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%department}}`.
 */
class m220317_174420_create_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%department}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(120),
            'name_uz' => $this->string(60),
            'name_ru' => $this->string(60),
            'name_en' => $this->string(60),
            'description_uz' => $this->text(),
            'description_ru' => $this->text(),
            'description_en' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%department}}');
    }
}
