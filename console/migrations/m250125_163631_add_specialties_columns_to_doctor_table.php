<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%doctor}}`.
 */
class m250125_163631_add_specialties_columns_to_doctor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%doctor}}', 'specialty_ru', $this->text()->null()->after('middle_name_en'));
        $this->addColumn('{{%doctor}}', 'specialty_uz', $this->text()->null()->after('specialty_ru'));
        $this->addColumn('{{%doctor}}', 'specialty_en', $this->text()->null()->after('specialty_uz'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%doctor}}', 'specialty_ru');
        $this->dropColumn('{{%doctor}}', 'specialty_uz');
        $this->dropColumn('{{%doctor}}', 'specialty_en');
    }
}
