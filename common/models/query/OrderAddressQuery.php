<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\order_address]].
 *
 * @see \common\models\order_address
 */
class OrderAddressQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\order_address[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\order_address|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
