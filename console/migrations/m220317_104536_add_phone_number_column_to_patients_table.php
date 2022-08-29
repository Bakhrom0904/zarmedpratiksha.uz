<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%patients}}`.
 */
class m220317_104536_add_phone_number_column_to_patients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%patients}}', 'phone', $this->string(20)->notNull()->after('status'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%patients}}', 'phone');
    }
}
