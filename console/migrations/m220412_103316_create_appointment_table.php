<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%appointment}}`.
 */
class m220412_103316_create_appointment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%appointment}}', [
            'id' => $this->primaryKey(),
            'department_id' => $this->integer(),
            'doctor_id' => $this->integer(),
            'time_id' => $this->integer(),
            'date' => $this->timestamp()->notNull(),
            'fullname' => $this->string(120)->notNull(),
            'phone' => $this->string(20)->notNull(),
        ]);

        $this->createIndex(
            '{{%idx-appointment-department_id}}',
            '{{%appointment}}',
            'department_id'
        );

        $this->createIndex(
            '{{%idx-appointment-doctor_id}}',
            '{{%appointment}}',
            'doctor_id'
        );

        $this->createIndex(
            '{{%idx-appointment-time_id}}',
            '{{%appointment}}',
            'time_id'
        );

        $this->addForeignKey(
            '{{%fk-appointment-department_id}}',
            '{{%appointment}}',
            'department_id',
            '{{%department}}',
            'id',
            'SET NULL'
        );

        $this->addForeignKey(
            '{{%fk-appointment-doctor_id}}',
            '{{%appointment}}',
            'doctor_id',
            '{{%doctor}}',
            'id',
            'SET NULL'
        );

        $this->addForeignKey(
            '{{%fk-appointment-time_id}}',
            '{{%appointment}}',
            'time_id',
            '{{%time}}',
            'id',
            'SET NULL'
        );
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%appointment}}');
    }
}
