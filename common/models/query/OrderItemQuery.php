<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Order_item]].
 *
 * @see \common\models\Order_item
 */
class OrderItemQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Order_item[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Order_item|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
