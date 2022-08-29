<?php

use yii\db\Migration;

/**
 * Class m220320_034534_alter_doctor_table
 */
class m220320_034534_alter_doctor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('doctor', 'first_name',);
        $this->dropColumn('doctor', 'last_name',);
        $this->dropColumn('doctor', 'middle_name',);
        $this->addColumn('doctor', 'first_name_ru', 'string(60)');
        $this->addColumn('doctor', 'last_name_ru', 'string(60)');
        $this->addColumn('doctor', 'middle_name_ru', 'string(60)');
        $this->addColumn('doctor', 'first_name_uz', 'string(60)');
        $this->addColumn('doctor', 'last_name_uz', 'string(60)');
        $this->addColumn('doctor', 'middle_name_uz', 'string(60)');
        $this->addColumn('doctor', 'first_name_en', 'string(60)');
        $this->addColumn('doctor', 'last_name_en', 'string(60)');
        $this->addColumn('doctor', 'middle_name_en', 'string(60)');
        $this->alterColumn('doctor', 'experience', 'json');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('doctor', 'first_name', 'string(60)');
        $this->addColumn('doctor', 'last_name', 'string(60)');
        $this->addColumn('doctor', 'middle_name', 'string(60)');
        $this->dropColumn('doctor', 'first_name_ru');
        $this->dropColumn('doctor', 'last_name_ru');
        $this->dropColumn('doctor', 'middle_name_ru');
        $this->dropColumn('doctor', 'first_name_uz');
        $this->dropColumn('doctor', 'last_name_uz');
        $this->dropColumn('doctor', 'middle_name_uz');
        $this->dropColumn('doctor', 'first_name_en');
        $this->dropColumn('doctor', 'last_name_en');
        $this->dropColumn('doctor', 'middle_name_en');
        $this->alterColumn('doctor', 'experience', 'text');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220320_034534_alter_doctor_table cannot be reverted.\n";

        return false;
    }
    */
}
