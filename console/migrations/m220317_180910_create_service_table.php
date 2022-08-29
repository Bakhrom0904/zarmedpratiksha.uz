<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m220317_180910_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'department_id' => $this->integer()->notNull(),
            'parent_id' => $this->integer(),
            'name_uz' => $this->string(30),
            'name_ru' => $this->string(30),
            'name_en' => $this->string(30),
            'description_uz' => $this->text(),
            'description_ru' => $this->text(),
            'description_en' => $this->text(),
        ]);

        // creates index for column `department_id`
        $this->createIndex(
            '{{%idx-service-department_id}}',
            '{{%service}}',
            'department_id'
        );

        // add foreign key for table `{{%department}}`
        $this->addForeignKey(
            '{{%fk-service-department_id}}',
            '{{%service}}',
            'department_id',
            '{{%department}}',
            'id',
            'NO ACTION'
        );

        // add foreign key for table `{{%service}}`
        $this->addForeignKey(
            '{{%fk-service-parent_id}}',
            '{{%service}}',
            'parent_id',
            '{{%service}}',
            'id',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
