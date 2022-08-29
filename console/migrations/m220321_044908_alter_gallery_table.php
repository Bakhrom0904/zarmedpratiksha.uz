<?php

use yii\db\Migration;

/**
 * Class m220321_044908_alter_gallery_table
 */
class m220321_044908_alter_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('gallery', 'title');
        $this->addColumn('gallery', 'title_uz', 'string(60)');
        $this->addColumn('gallery', 'title_ru', 'string(60)');
        $this->addColumn('gallery', 'title_en', 'string(60)');
        $this->alterColumn('gallery', 'path', 'text');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('gallery', 'title', 'string(60)');
        $this->dropColumn('gallery', 'title_uz', 'string(60)');
        $this->dropColumn('gallery', 'title_ru', 'string(60)');
        $this->dropColumn('gallery', 'title_en', 'string(60)');
        $this->alterColumn('gallery', 'path', 'string(120)');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220321_044908_alter_gallery_table cannot be reverted.\n";

        return false;
    }
    */
}
