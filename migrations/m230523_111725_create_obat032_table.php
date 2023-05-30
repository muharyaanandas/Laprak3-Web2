<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat032}}`.
 */
class m230523_111725_create_obat032_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat032}}', [
            'id' => $this->primaryKey(),
            'kode_obat' =>$this->string()->notNull(),
            'harga' =>$this->decimal(10,2)->notNull(),
            'stok_obat' =>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat032}}');
    }
}
