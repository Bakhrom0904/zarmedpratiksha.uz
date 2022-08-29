<?php

use yii\db\Migration;

/**
 * Class m220423_112400_alter_media_coverage
 */
class m220423_112400_alter_media_coverage extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('media_coverage', 'img', 'string(200)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220423_112400_alter_media_coverage cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220423_112400_alter_media_coverage cannot be reverted.\n";

        return false;
    }
    */
}
