<?php

use yii\db\Migration;

/**
 * Class m220420_065259_crete_google_ads_table
 */
class m220420_065259_crete_google_ads_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%google_ads}}', [
            'id' => $this->primaryKey(),
            'url' => $this->string(60)->notNull(),
            'content' => $this->text()->notNull(),
            'status' => $this->boolean()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%google_ads}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220420_065259_crete_google_ads_table cannot be reverted.\n";

        return false;
    }
    */
}
