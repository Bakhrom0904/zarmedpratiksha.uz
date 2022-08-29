<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%patients}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%region}}`
 * - `{{%district}}`
 */
class m220317_101958_create_patients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%patients}}', [
            'id' => $this->primaryKey(),
            'patient_id' => $this->integer()->unique()->notNull(),
            'first_name' => $this->string(45)->notNull(),
            'last_name' => $this->string(45)->notNull(),
            'region_id' => $this->integer()->notNull(),
            'district_id' => $this->integer()->notNull(),
            'address' => $this->string(120)->notNull(),
            'status' => "ENUM('active','inactive','blocked') NOT NULL DEFAULT 'inactive'",
            'confirm_code' => $this->integer(4),
            'code_expired_at' => $this->integer()->null(),
        ]);

        // creates index for column `region_id`
        $this->createIndex(
            '{{%idx-patients-region_id}}',
            '{{%patients}}',
            'region_id'
        );

        // add foreign key for table `{{%region}}`
        $this->addForeignKey(
            '{{%fk-patients-region_id}}',
            '{{%patients}}',
            'region_id',
            '{{%region}}',
            'id',
            'CASCADE'
        );

        // creates index for column `district_id`
        $this->createIndex(
            '{{%idx-patients-district_id}}',
            '{{%patients}}',
            'district_id'
        );

        // add foreign key for table `{{%district}}`
        $this->addForeignKey(
            '{{%fk-patients-district_id}}',
            '{{%patients}}',
            'district_id',
            '{{%district}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%region}}`
        $this->dropForeignKey(
            '{{%fk-patients-region_id}}',
            '{{%patients}}'
        );

        // drops index for column `region_id`
        $this->dropIndex(
            '{{%idx-patients-region_id}}',
            '{{%patients}}'
        );

        // drops foreign key for table `{{%district}}`
        $this->dropForeignKey(
            '{{%fk-patients-district_id}}',
            '{{%patients}}'
        );

        // drops index for column `district_id`
        $this->dropIndex(
            '{{%idx-patients-district_id}}',
            '{{%patients}}'
        );

        $this->dropTable('{{%patients}}');
    }
}
