<?php

use yii\db\Migration;

/**
 * Class m220424_152822_aleter_department_table_add_branch_id
 */
class m220424_152822_aleter_department_table_add_branch_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%department}}', 'branch_id', $this->integer()->after('img'));
        $this->addColumn('{{%department}}', 'order', $this->integer()->after('img'));

        $this->createIndex(
            '{{%idx-department-branch_id}}',
            '{{%department}}',
            'branch_id'
        );

        $this->addForeignKey(
            '{{%fk-department-branch_id}}',
            '{{%department}}',
            'branch_id',
            '{{%branch}}',
            'id',
            'NO ACTION'
        );
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%department}}', 'branch');
        $this->dropColumn('{{%department}}', 'order');
        $this->dropForeignKey('{{%fk-department-branch_id}}', '{{%department}}');
        $this->dropIndex('{{%idx-department-branch_id}}', '{{%department}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220424_152822_aleter_department_table_add_branch_id cannot be reverted.\n";

        return false;
    }
    */
}
