<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%time}}`.
 */
class m220412_100124_create_time_table extends Migration
{
    private $times = [
        ['time' => '09:00'],
        ['time' => '09:15'],
        ['time' => '09:30'],
        ['time' => '09:45'],
        ['time' => '10:00'],
        ['time' => '10:15'],
        ['time' => '10:30'],
        ['time' => '10:45'],
        ['time' => '11:00'],
        ['time' => '12:15'],
        ['time' => '12:30'],
        ['time' => '12:45'],
        ['time' => '14:00'],
        ['time' => '14:15'],
        ['time' => '14:30'],
        ['time' => '14:45'],
        ['time' => '15:00'],
        ['time' => '15:15'],
        ['time' => '15:30'],
        ['time' => '15:45'],
        ['time' => '16:00'],
        ['time' => '16:15'],
        ['time' => '16:30'],
        ['time' => '16:45'],
        ['time' => '17:00'],
        ['time' => '17:15'],
        ['time' => '17:30'],
        ['time' => '17:45'],
    ];
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%time}}', [
            'id' => $this->primaryKey(),
            'time' => $this->string(10),
        ]);

        $this->batchInsert('{{%time}}', [
            'time',
        ], $this->times);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%time}}');
    }
}
