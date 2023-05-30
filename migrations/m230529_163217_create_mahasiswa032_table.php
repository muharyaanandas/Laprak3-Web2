<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa032}}`.
 */
class m230529_163217_create_mahasiswa032_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa032}}', [
            'id032' => $this->primaryKey(),
            'nim032' =>$this->string()->notNull(),
            'nama032' =>$this->string()->notNull(),
            'kelas032' =>$this->string()->notNull(),
            'status032' =>$this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa032}}');
    }
}
