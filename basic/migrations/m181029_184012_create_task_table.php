<?php

use yii\db\Migration;

/**
 * Handles the creation of table `task`.
 */
class m181029_184012_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'discription' => $this->text(),
            'user_id' => $this->integer()
        ]);

        $this->addForeignKey('fk_task_users', 'task', 'user_id','user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('task');
    }
}
