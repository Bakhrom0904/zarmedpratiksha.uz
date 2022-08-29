<?php

use yii\db\Migration;

/**
 * Class m220422_074200_alter_appoinment_table
 */
class m220422_074200_alter_appoinment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('appointment', 'status', 'boolean');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('appointment', 'status',);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220422_074200_alter_appoinment_table cannot be reverted.\n";

        return false;
    }
    */
}
