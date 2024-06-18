<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_items}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m240617_110959_create_order_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_items}}', [
            'id' => $this->primaryKey(),
            'product_name' => $this->string(255)->notNull(),
            'product_id' => $this->integer(11)->notNull(),
            'unit_price' => $this->decimal(10 ,2)->notNull(),
            'order_id' => $this->integer(11)->notNull(),
            'quantity' => $this->integer(2)->notNull(),
        ]);

        // creates index for column `product_name`
        $this->createIndex(
            '{{%idx-order_items-product_name}}',
            '{{%order_items}}',
            'product_name'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-order_items-product_name}}',
            '{{%order_items}}',
            'product_name',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-order_items-product_name}}',
            '{{%order_items}}'
        );

        // drops index for column `product_name`
        $this->dropIndex(
            '{{%idx-order_items-product_name}}',
            '{{%order_items}}'
        );

        $this->dropTable('{{%order_items}}');
    }
}
