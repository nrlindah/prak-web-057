<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat057}}`.
 */
class m230523_163219_create_obat057_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat057}}', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this->string()->notNull(),
            'harga' => $this->decimal(10, 2)->notNull(),
            'stok_obat' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat057}}');
    }
}
