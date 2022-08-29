<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%doctor}}`.
 */
class m220317_180858_create_doctor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%doctor}}', [
            'id' => $this->primaryKey(),
            'department_id' => $this->integer()->notNull(),
            'first_name' => $this->string(45),
            'last_name' => $this->string(45),
            'middle_name' => $this->string(45),
            'phone' => $this->string(16),
            'date' => $this->json(),
            'img' => $this->string(120),
            'experience' => $this->text(),
            'about_uz' => $this->text(),
            'about_ru' => $this->text(),
            'about_en' => $this->text(),
        ]);

        // creates index for column `department_id`
        $this->createIndex(
            '{{%idx-doctor-department_id}}',
            '{{%doctor}}',
            'department_id'
        );

        // add foreign key for table `{{%department}}`
        $this->addForeignKey(
            '{{%fk-doctor-department_id}}',
            '{{%doctor}}',
            'department_id',
            '{{%department}}',
            'id',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%doctor}}');
    }
}
