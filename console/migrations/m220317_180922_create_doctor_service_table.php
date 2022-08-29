<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%doctor_service}}`.
 */
class m220317_180922_create_doctor_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%doctor_service}}', [
            'doctor_id' => $this->integer()->notNull(),
            'service_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `doctor_id`
        $this->createIndex(
            '{{%idx-doctor_service-doctor_id}}',
            '{{%doctor_service}}',
            'doctor_id'
        );

        // creates index for column `service_id`
        $this->createIndex(
            '{{%idx-doctor_service-service_id}}',
            '{{%doctor_service}}',
            'service_id'
        );

        // add foreign key for table `{{%doctor}}`
        $this->addForeignKey(
            '{{%fk-doctor_service-doctor_id}}',
            '{{%doctor_service}}',
            'doctor_id',
            '{{%doctor}}',
            'id',
            'CASCADE'
        );

        // add foreign key for table `{{%service}}`
        $this->addForeignKey(
            '{{%fk-doctor_service-service_id}}',
            '{{%doctor_service}}',
            'service_id',
            '{{%service}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%doctor_service}}');
    }
}
