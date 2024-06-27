<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\cart_item]].
 *
 * @see \common\models\cart_item
 */
class CartItemQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\cart_item[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\cart_item|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
