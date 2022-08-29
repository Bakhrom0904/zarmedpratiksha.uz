<?php

use yii\db\Migration;

/**
 * Class m220408_063333_alter_insurance_table
 */
class m220408_063333_alter_insurance_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('insurance', 'title_uz');
        $this->dropColumn('insurance', 'title_ru');
        $this->dropColumn('insurance', 'title_en');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220408_063333_alter_insurance_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220408_063333_alter_insurance_table cannot be reverted.\n";

        return false;
    }
    */
}
