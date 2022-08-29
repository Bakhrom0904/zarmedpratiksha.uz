<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%district}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%region}}`
 */
class m220317_100918_create_district_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%district}}', [
            'id' => $this->primaryKey(),
            'region_id' => $this->integer(),
            'name_uz' => $this->string(30),
            'name_ru' => $this->string(30),
            'name_en' => $this->string(30),
        ]);

        // creates index for column `region_id`
        $this->createIndex(
            '{{%idx-district-region_id}}',
            '{{%district}}',
            'region_id'
        );

        // add foreign key for table `{{%region}}`
        $this->addForeignKey(
            '{{%fk-district-region_id}}',
            '{{%district}}',
            'region_id',
            '{{%region}}',
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
            '{{%fk-district-region_id}}',
            '{{%district}}'
        );

        // drops index for column `region_id`
        $this->dropIndex(
            '{{%idx-district-region_id}}',
            '{{%district}}'
        );

        $this->dropTable('{{%district}}');
    }
}
