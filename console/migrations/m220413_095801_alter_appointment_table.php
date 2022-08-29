<?php

use yii\db\Migration;

/**
 * Class m220413_095801_alter_appointment_table
 */
class m220413_095801_alter_appointment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('appointment', 'date', 'date');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('appointment', 'date', 'timestamp');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220413_095801_alter_appointment_table cannot be reverted.\n";

        return false;
    }
    */
}
