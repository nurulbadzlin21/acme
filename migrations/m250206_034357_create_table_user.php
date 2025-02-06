<?php

use yii\db\Migration;

/**
 * Class m250206_034357_create_table_user
 */
class m250206_034357_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey()->unsigned(),
            'uid' => $this->string(60)->notNull()->unique(),
            'username' => $this->string(45)->notNull(),
            'email' => $this->string(255)->notNull()->unique(),
            'password' => $this->string(60)->notNull(),
            'status' => $this->integer(4)->notNull()->defaultValue(0),
            'contact_email' => $this->boolean()->notNull()->defaultValue(false),
            'contact_phone' => $this->boolean()->notNull()->defaultValue(false),
            'created' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated' => $this->timestamp()->null(), // Izinkan NULL
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250206_034357_create_table_user cannot be reverted.\n";

        return false;
    }
    */
}
