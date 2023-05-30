<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mhs057}}`.
 */
class m230530_095550_create_mhs057_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs057}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string()->notNull(),
            'nama_mahasiswa' => $this->string(255)->notNull(),
            'kelas' => $this->string()->notNull(),
            'status' => $this->string()->notNull(), 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs057}}');
    }
}
