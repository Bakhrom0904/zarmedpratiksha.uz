<?php

use yii\db\Migration;

/**
 * Class m220606_085343_alter_media_table_add_col_description
 */
class m220606_085343_alter_media_table_add_col_description extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('media_coverage', 'description_uz', 'text');
        $this->addColumn('media_coverage', 'description_ru', 'text');
        $this->addColumn('media_coverage', 'description_en', 'text');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('media_coverage', 'description_uz');
        $this->dropColumn('media_coverage', 'description_ru');
        $this->dropColumn('media_coverage', 'description_en');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220606_085343_alter_media_table_add_col_description cannot be reverted.\n";

        return false;
    }
    */
}
