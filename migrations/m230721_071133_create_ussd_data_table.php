<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ussd_data}}`.
 */
class m230721_071133_create_ussd_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ussd_data}}', [
            'id' => $this->primaryKey(),
            'session_id' => $this->string()->notNull(),
            'phone_number' => $this->string()->notNull(),
            'text' => $this->string(),
            'response'=> $this->string(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP'),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ussd_data}}');
    }
}
