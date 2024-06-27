<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 * - `{{%orders}}`
 */
class m240627_083049_create_cart_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cart_items}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(11)->notNull(),
            'quantity' => $this->integer(2)->notNull(),
            'created_by' =>$this->integer(11),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-cart_items-product_id}}',
            '{{%cart_items}}',
            'product_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-cart_items-product_id}}',
            '{{%cart_items}}',
            'product_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-cart_items-created_by}}',
            '{{%cart_items}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-cart_items-created_by}}',
            '{{%cart_items}}',
            'created_by',
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
        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-orders-product_id}}',
            '{{%orders}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-orders-product_id}}',
            '{{%orders}}'
        );

        // drops foreign key for table `{{%orders}}`
        $this->dropForeignKey(
            '{{%fk-orders-order_id}}',
            '{{%orders}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-orders-order_id}}',
            '{{%orders}}'
        );

        $this->dropTable('{{%orders}}');
    }
}
