<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%articles}}`.
 */
class m220406_064316_create_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%articles}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(120)->notNull(),
            'doctor_id' => $this->integer(),
            'service_id' => $this->integer(),
            'title_uz' => $this->string(200)->notNull(),
            'title_ru' => $this->string(200)->notNull(),
            'title_en' => $this->string(200)->notNull(),
            'description_uz' => $this->text()->notNull(),
            'description_ru' => $this->text()->notNull(),
            'description_en' => $this->text()->notNull(),
            'published_at' => $this->timestamp(),
        ]);

        // creates index for column `doctor_id`
        $this->createIndex(
            '{{%idx-doctor_id}}',
            '{{%articles}}',
            'doctor_id'
        );

        // creates index for column `service_id`
        $this->createIndex(
            '{{%idx-service_id}}',
            '{{%articles}}',
            'service_id'
        );

        // add foreign key for table `{{%doctor}}`
        $this->addForeignKey(
            '{{%fk-doctor_id}}',
            '{{%articles}}',
            'doctor_id',
            '{{%doctor}}',
            'id',
            'SET NULL'
        );

        // add foreign key for table `{{%service}}`
        $this->addForeignKey(
            '{{%fk-service_id}}',
            '{{%articles}}',
            'service_id',
            '{{%service}}',
            'id',
            'SET NULL'
        );
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%articles}}');
    }
}
